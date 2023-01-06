<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Models\User;
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
            'gender' => 'required|string|max:255',
            'dob' => 'required|date|before:today',
            'mobile_number' => 'required',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password|min:6',
            //2nd Page
            // 'user_name' => 'required',
            // 'dob' => 'required|date|before:today',
            // 'gender' => 'required',
            // 'address1' => 'required',
            // 'address2' => 'required',
            // 'zipcode' => 'required',
            // 'state' => 'required',
            // 'citizenship' => 'required',
            // 'country' => 'required',
            // 'city' => 'required',
            // 'email' => 'required|string|email|max:255|unique:users',

        ]);
        if ($validator->fails())
        {
            return $this->sendError('Validatoin Error',$validator->errors());
        }
        $email = $request->email;
        $request['password']=Hash::make($request['password']);
        $user = User::create($request->toArray());
        $id = User::where('email', $email)->value('id');
        $student = Student::create([
            'first_name' => strtoupper($request->first_name),
            'last_name' =>  strtoupper($request->last_name),
            'user_password' => $request->password,
            'mobile_number' => $request->mobile_number,
            'email' => $request->email,
            'user_id' => $id,
            ]);
        $success['token'] = $user->createToken('apiToken')->plainTextToken;
        $success['name'] = $student->first_name.' '.$student->last_name;
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
