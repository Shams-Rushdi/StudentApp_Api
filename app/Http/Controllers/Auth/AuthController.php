<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function loginSubmit(Request $req){


        $user = Admin::where('email', $req->email)->first();
        if ($user) {
            //dd(Hash::check($request->password, $user->user_password));
            if( Hash::check($req->password, $user->password)){
                if($user->role == "Admin" || $user->role == "SuperAdmin"){
                    session()->put('user',$user->email);
                    return redirect()->route('dashboardbd');  
                    }

                // else if($user->role == "SuperAdmin"){
                //         session()->put('user',$user->email);
                //         return redirect()->route('dashboardbd');  
                //         }
                // else {
                //             session()->flash('msg','User not valid');
                //             return back();
                //         }
                
            }

        // if($user = Admin::where('email',$req->email)->where('password',$req->password)->first()){

        //     if($user->role == "Admin"){
        //         session()->put('user',$user->email);
        //         return redirect()->route('dashboardbd');
        //         }

        // }
        else {
            session()->flash('msg','User not valid');
            return back();
        }
    }
        // $user = Admin::where('email',$req->email)
        // ->where('password',$req->password)->first();

        // if($user->role == "Admin"){
        // session()->put('user',$user->email);
        // return redirect()->route('dashboardbd');
        // }

        //  else if($user->role == "null"){
        //     session()->put('user',$user->email);
        //     //return view('UMS.users.dashboard')->with('user',$user);
        //     return redirect()->route('othertest.index');
    
        //     }
        
    }
    public function welcome(){

    }


    public function profileUpdate(Request $req){
        $id =  $req->id;
        $user = UserModel :: where ('id',$id)->first();
        return view ('UMS.users.profile')->with('user',$user);

    }
   public function profileUpdateSubmit(Request $req){

    $this->validate($req,
    [
        "name"=>"required|max:50|min:3",
        "email"=>"required|email|unique:users,email",
        "phonenumber"=>'required',
        "address"=>'required'   
    ],

    [
        "name.required"=>"Please provide your name",
        "name.max"=>"Name should not exceed 50 characters",  
    ]);
            //$registrations = Registration::all();
            //$var = new UMSRegistration();
            $var = UserModel::where ('id',$req->id)->first();
            //return $req;
            $var->name = $req->name;
            //return $req;
            $var->email =$req->email;
            $var->password =$req->password;
            $var->confirmpassword =$req->confirmpassword;
            $var->phonenumber =$req->phonenumber;
            $var->address =$req->address;

            $var->save();
            session()->flash('msg','successfull');
            //return view('product.list')->with('products',$products);
            //return view('UMS.users.dashboard')->with('user',$user );
            return redirect()->route('logout');
        
    }
}
