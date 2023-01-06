<?php

namespace App\Http\Controllers;

use App\Models\Scholarship;
use App\Models\Degree;
use App\Models\Admin;
use App\Models\EnglishTest;
use App\Models\Major;
use App\Models\Otherenglishtest;
use App\Models\University;
use Illuminate\Http\Request;

class ScholarshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Admin::where('email',session()->get('user'))->first();
        $scholarships = Scholarship::latest()->get();
        return view('AdminPanel.scholership.scholarshiplist', compact('scholarships','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Admin::where('email',session()->get('user'))->first();
        $degrees = Degree::pluck('degrees_name','id')->toArray();
        $engtests = EnglishTest::pluck('test_name','id')->toArray();
        $othertests = Otherenglishtest::pluck('othertest_name','id')->toArray();
        $university = University::pluck('university_name','id')->toArray();
        $major = Major::pluck('majors_name','id')->toArray();
        return view ('AdminPanel.scholership.scholarshipadd', compact('degrees','engtests','othertests','university','major','user'));
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
        $sc = new Scholarship();
        $sc->scholership_name = $request->scholership_name;
        $sc->scholership_available = $request->scholership_available;
        $sc->scholership_degree = json_encode($request->scholership_degree);
        $sc->scholership_major = json_encode($request->scholership_major);
        $sc->scholership_cgpa = $request->scholership_cgpa;
        $sc->scholership_details = $request->scholership_details;
        $sc->scholership_deadline = $request->scholership_deadline;
        $sc->university_id = $request->university_id;
        $sc->save();
        session()->flash('msg','successfull');
        return redirect()->route('scholarships.index')->with('success','Company has been deleted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Scholarship  $scholarship
     * @return \Illuminate\Http\Response
     */
    public function show(Scholarship $scholarship)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Scholarship  $scholarship
     * @return \Illuminate\Http\Response
     */
    public function edit(Scholarship $scholarship)
    {
        $user = Admin::where('email',session()->get('user'))->first();
        return view ('AdminPanel.scholership.scholarshipedit',compact('scholarship','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Scholarship  $scholarship
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Scholarship $scholarship)
    {
        $scholarship->fill($request->post())->save();
        return redirect()->route('scholarships.index')->with('success','categories has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Scholarship  $scholarship
     * @return \Illuminate\Http\Response
     */
    public function destroy(Scholarship $scholarship)
    {
        $scholarship->delete();
        return back();
    }
}
