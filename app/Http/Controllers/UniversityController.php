<?php

namespace App\Http\Controllers;
use Session;
use Auth;
use App\Models\University;
use App\Models\Degree;
use App\Models\Admin;
use App\Models\Major;
use App\Models\EnglishTest;
use App\Models\Otherenglishtest;
use Illuminate\Http\Request;
use File;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Admin::where('email',session()->get('user'))->first();
        $universities = University::latest()->get();
        return view('AdminPanel.university.universitylist', compact('universities','user'));
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
        $major = Major::pluck('majors_name','id')->toArray();
        $engtests = EnglishTest::pluck('test_name','id')->toArray();
        $othertests = Otherenglishtest::pluck('othertest_name','id')->toArray();
        return view ('AdminPanel.university.universityadd', compact('degrees','engtests','major','othertests','user'));
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
        //     "name"=>"required",

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
        $imageName= '';
        if($image = $request->file('image')){
            $imageName = time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('images/university',$imageName);
        }
        //dd($request->all());
        
        //dd($request->file('university_image'));
        $un = new University();
        $un->university_name = $request->university_name;
        $un->university_address = $request->university_address;
        $un->university_city = $request->university_city;
        $un->university_country = $request->university_country;
        $un->university_image = $imageName;
        $un->deadline = $request->deadline;
        $un->degree = json_encode($request->degree_);
        $un->major = json_encode($request->major_);
        $un->eng_requirement = json_encode($request->eng_requirement);
        $un->other_requirement = json_encode($request->other_requirement);
        $un->gpa_requirement = $request->gpa_requirement;
        $un->education_cost = $request->education_cost;
        $un->sop = $request->sop;
        $un->acceptance_rate = $request->acceptance_rate;
        $un->application_fee = $request->application_fee;
        $un->save();
        session()->flash('msg','successfull');
        return redirect()->route('university.index')->with('success','Company has been deleted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\University  $university
     * @return \Illuminate\Http\Response
     */
    public function show(University $university)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\University  $university
     * @return \Illuminate\Http\Response
     */
    public function edit(University $university)
    {
        $user = Admin::where('email',session()->get('user'))->first();
        return view ('AdminPanel.university.universityedit',compact('university','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\University  $university
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, University $university)
    {
        // $this->validate($request,
        // [
        //     "name"=>"required",

      
        // ]);
        
    
                $university->fill($request->post())->save();
                return redirect()->route('university.index')->with('success','university has been updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\University  $university
     * @return \Illuminate\Http\Response
     */
    public function destroy(University $university)
    {
        $university->delete();
        return back();
    }
}
