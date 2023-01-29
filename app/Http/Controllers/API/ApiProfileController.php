<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Validator;


class ApiProfileController extends BaseController
{
    public function MyClassified(Request $request,$id){
        
        return $this->sendResponse($success,'User Registrated Successfully');
    }

    public function MyFavourite(Request $request,$id){
        
        return $this->sendResponse($success,'User Registrated Successfully');
    }    
    public function ProfilePicture(Request $request,$id){
        $validator = Validator::make($request->all(), [
            'image' => 'required',
            
        ]);
        if ($validator->fails())
        {
            return $this->sendError('Validatoin Error',$validator->errors());
        }
        $imageName= '';
        if($image = $request->file('image')){
            $imageName = time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('images/student',$imageName);
        }
        $student = Student::find($id);
            $student->image = $imageName;
        return $this->sendResponse($success,'Image Uploaded Successfully');
    }
/////

public function ChangePassword(Request $request)
   {
      $validator=Validator::make($request->all(),[
         'old_password'        =>'required',
         'new_password'         =>'required|min:8|max:30',
         'confirm_password' =>'required|same:new_password'
      ]);
      if ($validator->fails()) {
         return response()->json([
            'message'=>'validations fails',
            'errors' =>$validator->errors()
         ],422);
      }
      $user=$request->user();

      if (Hash::check($request->old_password,$user->password)) {
         $user->update([
            'password'=>Hash::make($request->new_password)
         ]);


         return response()->json([
            'message'=>' password successfully updated',
            'errors' =>$validator->errors()
         ],200);
      }
      else
      {
         return response()->json([
            'message'=>'old password does not match',
            'errors' =>$validator->errors()
         ],422);
      }
   }
//////
    public function ChangeAddress(Request $request,$id){

        $validator = Validator::make($request->all(), [
            'address1' => 'required',
            'address2' => 'required',
        ]);
        if ($validator->fails())
        {
            return $this->sendError('Validatoin Error',$validator->errors());
        }
        $student = Student::find($id);
        $student->address1 = $request->address1;
        $student->address1 = $request->address1;
        return $this->sendResponse($success,'Address Updated Successfully');
    }

    public function ChangePhoneNumber(Request $request,$id){
        
        $validator = Validator::make($request->all(), [
            'mobile_number' => 'required',
            
        ]);
        if ($validator->fails())
        {
            return $this->sendError('Validatoin Error',$validator->errors());
        }
        $hasPass = Admin:: find($request->id);
        if (Hash::check($request->old_password, $hasPass->password)) {
            $hasPass->update([
                'password' => Hash::make($request->password)
            ]);
            
            return $this->sendResponse($success,'Password Updated Successfully');
        } else {
            return $this->sendError($success,'Password did not matched');
        }
        
    }

    public function ChangeEmail(Request $request,$id){
        
        $validator = Validator::make($request->all(), [
            'email' => 'required|unique:users',
            
        ]);
        if ($validator->fails())
        {
            return $this->sendError('Validatoin Error',$validator->errors());
        }
        $student = Student::find($id);
        $student->email = $request->email;
        return $this->sendResponse($success,'Email Updated Successfully');
    }
}
