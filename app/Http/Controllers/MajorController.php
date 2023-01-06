<?php

namespace App\Http\Controllers;

use App\Models\Major;
use App\Models\Admin;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Admin::where('email',session()->get('user'))->first();
        $majors = Major::latest()->get();
        return view('AdminPanel.Major.majorlist', compact('majors','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Admin::where('email',session()->get('user'))->first();
        return view ('AdminPanel.Major.majoradd',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request,
        // [
        //     "name"=>"required|unique:categories",
        //     "description"=>"required",
        //     "image"=>"required",
        //     "status"=>"required",

        // ]);
        //dd($request->all());
        

        // if ($request->hasFile('image')) {

        //     if (file_exists($Category->user->image)) {
        //         unlink($Category->user->image);
        //     }

        //     $image = $request->file('image')->store('public/images/Category');
        //     $filename = $request->file('image')->hashName();
        //     $data['image']  = 'storage/images/Category/' . $filename;
        // };
        $major = new Major();
        //dd($request->majors_name);
        $major->majors_name = $request->majors_name;
        $major->save();
        session()->flash('msg','successfull');
        return redirect()->route('major.index')->with('success','Company has been deleted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Major  $major
     * @return \Illuminate\Http\Response
     */
    public function show(Major $major)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Major  $major
     * @return \Illuminate\Http\Response
     */
    public function edit(Major $major)
    {
        $user = Admin::where('email',session()->get('user'))->first();
        return view ('AdminPanel.Major.majoredit',compact('major','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Major  $major
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Major $major)
    {
        // $this->validate($request,
        // [
        //     "name"=>"required",
        //     "description"=>"required",
        //     "status"=>"required",
        //     "image"=>"required"
      
        // ]);
    
                
                $major->fill($request->post())->save();
                return redirect()->route('major.index')->with('success','categories has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Major  $major
     * @return \Illuminate\Http\Response
     */
    public function destroy(Major $major)
    {
        //dd($major-> all());
        $major->delete();
        return back();
    }
}
