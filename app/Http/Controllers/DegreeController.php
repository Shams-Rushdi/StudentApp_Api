<?php

namespace App\Http\Controllers;

use App\Models\Degree;
use App\Models\Admin;
use Illuminate\Http\Request;

class DegreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Admin::where('email',session()->get('user'))->first();
        $degrees = Degree :: latest()->get();
        return view('AdminPanel.degree.degreelist',compact('degrees','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Admin::where('email',session()->get('user'))->first();
        return view ('AdminPanel.degree.degreeadd',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $degree = new Degree();
        $degree->degrees_name = $request->degrees_name;
        $degree->save();
        session()->flash('msg','successfull');
        return redirect()->route('degree.index')->with('success','Company has been deleted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Degree  $degree
     * @return \Illuminate\Http\Response
     */
    public function show(Degree $degree)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Degree  $degree
     * @return \Illuminate\Http\Response
     */
    public function edit(Degree $degree)
    {
        $user = Admin::where('email',session()->get('user'))->first();
        return view ('AdminPanel.degree.degreeedit',compact('degree','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Degree  $degree
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Degree $degree)
    {
        $degree->fill($request->post())->save();
        return redirect()->route('degree.index')->with('success','degrees has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Degree  $degree
     * @return \Illuminate\Http\Response
     */
    public function destroy(Degree $degree)
    {
        $degree->delete();
        return back();
    }
}
