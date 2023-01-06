<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Admin::where('email',session()->get('user'))->first();
        $students = Student::latest()->get();
        return view('AdminPanel.student.studentlist', compact('students','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Admin::where('email',session()->get('user'))->first();
        return view('AdminPanel.student.studentadd',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        // $user = new User();
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = $request->password;
        // $user->save();
        // session()->flash('msg','successfull');
        // return redirect()->route('index')->with('success','Student has been created successfully');
                    // User::create([
                    // 'name' => $request->name,
                    // 'password' => $request->password,
                    // 'email' => $request->email,
                    // ]);


                    // //$users=User::first();
                    // $users=User::latest()->get();
                    // Student::create([

                    //     'user_name' => $request->name,
                    //     'password' => $request->password,
                    //     'email' => $request->email,
                    //     'user_id' => $users->id,
                    // ]);
                            
                            $email = $request->email;
                            //dd($email);
                            User::create([
                            'name' => $request->name,
                            'password' => $request->password,
                            'email' => $request->email,
                            ]);

                            //$id = User::select('id')->where('email', $email)->get();
                            $id = User::where('email', $email)->value('id');
                            //dd($id);
                            Student::create([
                            'user_name' => $request->name,
                            'user_password' => $request->password,
                            'email' => $request->email,
                            'user_id' => $id,
                            ]);
                            session()->flash('msg','successfull');
                            return redirect()->route('index')->with('success',
                            'Student has been created successfully');

                   





    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view ('AdminPanel.student.studentedit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $student->fill($request->post())->save();
        return redirect()->route('student.index')->with('success','student has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return back();
    }
}
