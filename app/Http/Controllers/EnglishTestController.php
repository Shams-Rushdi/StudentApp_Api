<?php

namespace App\Http\Controllers;

use App\Models\EnglishTest;
use App\Models\Admin;
use Illuminate\Http\Request;

class EnglishTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Admin::where('email',session()->get('user'))->first();
        $englishtests = EnglishTest::latest()->get();
        return view('AdminPanel.EnglishTest.englishlist', compact('englishtests','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Admin::where('email',session()->get('user'))->first();
        return view ('AdminPanel.EnglishTest.englishadd',compact('user'));
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
        $eng = new EnglishTest();
        $eng->test_name = $request->test_name;
        $eng->test_type = $request->test_type;
        $eng->test_date = $request->test_date;
        $eng->test_score = $request->test_score;
        $eng->save();
        session()->flash('msg','successfull');
        return redirect()->route('englishtest.index')->with('success','Company has been deleted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EnglishTest  $englishTest
     * @return \Illuminate\Http\Response
     */
    public function show(EnglishTest $englishTest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EnglishTest  $englishTest
     * @return \Illuminate\Http\Response
     */
    public function edit(EnglishTest $englishtest)
    {
        $user = Admin::where('email',session()->get('user'))->first();
        return view ('AdminPanel.EnglishTest.englishedit',compact('englishtest','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EnglishTest  $englishTest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EnglishTest $englishtest)
    {
        $englishtest->fill($request->post())->save();
        return redirect()->route('englishtest.index')->with('success','categories has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EnglishTest  $englishTest
     * @return \Illuminate\Http\Response
     */
    public function destroy(EnglishTest $englishtest)
    {
        $englishtest->delete();
        return back();
    }
}
