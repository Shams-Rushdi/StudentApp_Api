<?php

namespace App\Http\Controllers;

use App\Models\Otherenglishtest;
use App\Models\Admin;
use Illuminate\Http\Request;

class OtherenglishtestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Admin::where('email',session()->get('user'))->first();
        $otherenglishtests = Otherenglishtest::latest()->get();
        return view('AdminPanel.OtherTest.othertestlist', compact('otherenglishtests','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Admin::where('email',session()->get('user'))->first();
        return view ('AdminPanel.OtherTest.othertestadd',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $othereng = new Otherenglishtest();
        $othereng->othertest_name = $request->othertest_name;
        $othereng->othertest_date = $request->othertest_date;
        $othereng->othertest_score = $request->othertest_score;
        $othereng->save();
        session()->flash('msg','successfull');
        return redirect()->route('othertest.index')->with('success','Company has been deleted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Otherenglishtest  $otherenglishtest
     * @return \Illuminate\Http\Response
     */
    public function show(Otherenglishtest $otherenglishtest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Otherenglishtest  $otherenglishtest
     * @return \Illuminate\Http\Response
     */
    public function edit(Otherenglishtest $othertest)
    {
        $user = Admin::where('email',session()->get('user'))->first();
        return view ('AdminPanel.OtherTest.othertestedit',compact('othertest','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Otherenglishtest  $otherenglishtest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Otherenglishtest $othertest)
    {
        $othertest->fill($request->post())->save();
        return redirect()->route('othertest.index')->with('success','categories has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Otherenglishtest  $otherenglishtest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Otherenglishtest $othertest)
    {
        $othertest->delete();
        return back();
    }
}
