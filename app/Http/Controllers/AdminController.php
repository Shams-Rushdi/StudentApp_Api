<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\AdminType;
use Illuminate\Http\Request;
use Session;
use Auth;
use Illuminate\Support\Facades\Hash;

use File;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Admin::where('email',session()->get('user'))->first();
        $admin = Admin :: latest()->get();
        return view ('AdminPanel.admin.adminlist',compact('admin','user'));
    }

    public function admintype()
    {
        $user = Admin::where('email',session()->get('user'))->first();
        return view ('AdminPanel.admin.admintypeadd',compact('user'));
    }
    public function admintypesubmit(Request $request)
    {
        $admin = new AdminType();
        $admin->admin_type = $request->admin_type;
        $admin->save();
        Session::flash('msg','successfull');
        return redirect()->route('admin.index')->with('success','Company has been deleted successfully');
    }

    public function passwordUpdate(Request $req){
        $id =  $req->id;
        $admin = Admin :: where ('id',$id)->first();
        $user = Admin :: where ('id',$id)->first();
        return view ('AdminPanel.admin.adminpassword',compact('admin','user'));

    }

    public function passwordUpdateSubmit(Request $request){
       // dd($request->all());
        if(!Hash::check($request->old_password,user()->password)){
            //return back()->with("error", "Old Password Doesn't match!");
            return "Old Password Doesn't match!";
        }

        #Update the new Password
        Admin::whereId($request->id)->update([
            'password' => Hash::make($request->new_password)
        ]);


        }



    public function profileUpdate(Request $req){
        $id =  $req->id;
        $admin = Admin :: where ('id',$id)->first();
        $user = Admin :: where ('id',$id)->first();
        return view ('AdminPanel.admin.adminprofile',compact('admin','user'));

    }

    public function profileUpdateSubmit(Request $request){

        // $this->validate($req,
        // [
        //     "name"=>"required|max:50|min:3",
        //     "email"=>"required|email|unique:users,email",
        //     "phonenumber"=>'required',
        //     "address"=>'required'   
        // ],
    
        // [
        //     "name.required"=>"Please provide your name",
        //     "name.max"=>"Name should not exceed 50 characters",  
        // ]);
        //dd($request->all());
        $admin = Admin::where ('id',$request->id)->first();
        $admin->first_name = $request->first_name;
        $admin->last_name = $request->last_name;
        $admin->username = $request->username;
        $admin->email = $request->email;
        $admin->role = $request->role;
        //$admin->password = Hash::make($request['password']);
        $admin->phonenumber2 = $request->phonenumber2;
        $admin->save();
        session()->flash('msg','successfull');
        return redirect()->route('dashboardbd');  
        //return view('product.list')->with('products',$products);
        //return view('UMS.users.dashboard')->with('user',$user );
                
            
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admintype = AdminType::pluck('admin_type','id')->toArray();
        $user = Admin::where('email',session()->get('user'))->first();
        return view ('AdminPanel.admin.adminadd',compact('user','admintype'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $imageName= '';
        if($image = $request->file('image')){
            $imageName = time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('images/admin',$imageName);
        }

        //dd($request->all());
        $admin = new Admin();
        $admin->first_name = $request->fname;
        $admin->last_name = $request->lname;
        $admin->username = $request->uname;
        $admin->email = $request->email;
        $admin->role = $request->admintype;
        $admin->address = $request->address;
        //$admin->password = $request->password;
        $admin->password = Hash::make($request['password']);
        //$request['password']=Hash::make($request['password']);
        $admin->phonenumber1 = $request->phonenumber1;
        $admin->phonenumber2 = $request->phonenumber2;
        $admin->nid = $request->nid;
        $admin->image = $imageName;
        $admin->degree = $request->degree;
        $admin->gender = $request->gender;
        $admin->nationality = $request->nationality;
        $admin->joiningdate = $request->joiningdate;
        $admin->save();
        Session::flash('msg','Successfull');
        return redirect()->route('admin.index')->with('success','Company has been deleted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        $admintype = AdminType::pluck('admin_type','id')->toArray();
        $user = Admin::where('email',session()->get('user'))->first();
        return view ('AdminPanel.admin.adminedit',compact('admin','user','admintype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        $imageName= '';
        $deleteOldImage = 'images/admin/'.$admin->image;
        if($image = $request->file('image')){
            if(file_exists($deleteOldImage)){
                File::delete($deleteOldImage);
            }
            $imageName = time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('images/admin',$imageName);
        }
        else{
            $imageName = $admin->image;
        }

            $admin = Admin::where ('id',$request->id)->first();
            $admin->first_name = $request->first_name;
            $admin->last_name = $request->last_name;
            $admin->username = $request->username;
            $admin->email = $request->email;
            $admin->role = $request->role;
            $admin->address = $request->address;
            $admin->password = $request->password;
            $admin->phonenumber1 = $request->phonenumber1;
            $admin->phonenumber2 = $request->phonenumber2;
            $admin->nid = $request->nid;
            $admin->image = $imageName;
            $admin->degree = $request->degree;
            $admin->gender = $request->gender;
            $admin->nationality = $request->nationality;
            $admin->joiningdate = $request->joiningdate;
            $admin->save();
        // $admin->fill($request->post())->save();
        return redirect()->route('admin.index')->with('success','admin has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        $deleteOldImage = 'images/admin/'.$admin->image;
        if(file_exists($deleteOldImage)){
            File::delete($deleteOldImage);
        }
        $admin->delete();
        return back();
    }
}
