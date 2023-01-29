<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Education;
use App\Models\Employment;
use App\Models\ExtraCuricullumn;
use App\Models\StudentEnglishTest;
use Illuminate\Support\Facades\Hash;
use App\Models\Student;
use Illuminate\Support\Str;
use App\Rules\Uppercase;

use Auth;
//use Illuminate\Support\Facades\Auth;
use Validator;

class AuthController extends BaseController
{
    public function register (Request $request) {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'mobile_number' => 'required',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password|min:6',
        ]);
        if ($validator->fails())
        {
            return $this->sendError('Validatoin Error',$validator->errors());
        }
        $email = $request->email;
        $request['password']=Hash::make($request['password']);
        $user = User::create($request->toArray());
        $id = User::where('email', $email)->value('id');
        $id_Stu = Student::where('email', $email)->value('id');
        $student = Student::create([
            'first_name' => strtoupper($request->first_name),
            'last_name' =>  strtoupper($request->last_name),
            'user_password' => $request->password,
            'mobile_number' => $request->mobile_number,
            'email' => $request->email,
            'user_id' => $id,
            ]);
            $id_Stu = Student::where('email', $email)->value('id');
            //'student_id' => $id_Stu,
        $success['token'] = $user->createToken('apiToken')->plainTextToken;
        $success['name'] = $student->first_name.' '.$student->last_name;
        $success['id'] = $student->id;
        //$success['email'] = $student->email;
        return $this->sendResponse($success,'User Registrated Successfully');
    }
    public function signup2 (Request $request,$id) {
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            //2nd Page
            //'user_name' => 'required',
            'dob' => 'required|date|before:today',
            'gender' => 'required|string|max:255',
            'address1' => 'required',
            'address2' => 'required',
            'zipcode' => 'required',
            'state' => 'required',
            'citizenship' => 'required',
            'country' => 'required',
            'city' => 'required',
            //3rd Page
            'institution_name' => 'required',
            'position' => 'required',
            'year' => 'required',

            'test_type' => 'required',
            'test_Date' => 'required',
            'test_Score' => 'required',
            'end_date' => 'required',


            'degree_name' => 'required',
            'institution_name' => 'required',
            'grade_result' => 'required',
            'attendence_start' => 'required',
            'finish_date' => 'required',



            'official_transcript' => 'required',
            'transcript_degree_english' => 'required',

           

            'current_cash' => 'required',
            'bank_solvency_date' => 'required',


            'publication/Certificate' => 'required',
            'date_actived' => 'required',
            'search_ability' => 'required',
        ]);


        if ($validator->fails())
        {
            return $this->sendError('Validatoin Error',$validator->errors());
        }
       
            $student = Student::find($id);
            $student->user_name = $request->user_name;
            $student->official_transcript = $request->official_transcript;
            $student->transcript_degree_english = $request->transcript_degree_english;
            $student->current_cash = $request->current_cash;
            $student->bank_solvency_date = $request->bank_solvency_date;

        // $student = Student::create([
        //     'user_name' => $request->user_name,
        //     'official_transcript' => $request->official_transcript,
        //     'transcript_degree_english' => $request->transcript_degree_english,
        //     'current_cash' => $request->current_cash,
        //     'bank_solvency_date' => $request->bank_solvency_date,
        //     ]);
            $id_Stu = Student::where('id', $id)->value('id');
            $education = Education::create([
                'degree_name' => $request->degree_name,
                'institution_name' =>  $request->institution,
                'grade_result' => $request->grade_result,
                'attendence_start' => $request->attendence_start,
                'finish_date' => $request->finish_date,
                'student_id' => $id_Stu,
                ]);


                $institution_name = $request->institution_name;
                $position = $request->position;
                $year = $request->year;

                for($i=0; $i<count($institution_name);$i++){
                    $employment = Employment::create([
                        'institution_name' => $institution_name[$i],
                        'position' => $position[$i],
                        'year' => $year[$i],
                        'student_id' => $id_Stu,
                        ]);
                }

                $publication = $request->publication;
                $date_actived = $request->date_actived;
                $search_ability = $request->search_ability;
 
                    $extracuricullumn = ExtraCuricullumn::create([
                        'publication/Certificate' => $request->publication,
                        'date_actived' =>  $request->date_actived,
                        'search_ability' => $request->search_ability,
                        'student_id' => $id_Stu,
                        ]);

                        $studentnglishtest = StudentEnglishTest::create([
                            'test_type' => $request->test_type,
                            'test_Date' =>  $request->test_Date,
                            'test_Score' => $request->test_Score,
                            'end_date' => $request->end_date,
                            'student_id' => $id_Stu,
                            ]);
                         
                            //$success['token'] = $user->createToken('apiToken')->plainTextToken;
                            $success['name'] = $student->first_name.' '.$student->last_name;
                            $success['id'] = $student->id;
                            return $this->sendResponse($success,'User Registrated Successfully');


    }

    public function login (Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|min:6',
        ]);
        if ($validator->fails())
        {
            return $this->sendError('Validatoin Error',$validator->errors());
        }
        $user = Student::where('email', $request->email)->first();
        if ($user) {
            //dd(Hash::check($request->password, $user->user_password));
            if( Hash::check($request->password, $user->user_password)){
                $success['token'] = $user->createToken('apiToken')->plainTextToken;
                $success['name'] = $user->first_name.' '.$user->last_name;
                $success['image'] = $user->image;

                return $this->sendResponse($success,'User Logged in Successfully');

            } else {
                return $this->sendError('Unauthorized', ['error' => 'Unauthorized']);
            }
                }
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();
        return $this->sendResponse([],'User Logged out');
    }
    public function PasswordChange(Request $req,$id){
        $studentdelete = Student::find($id);

    }
}
