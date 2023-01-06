<?php
namespace App\Http\Controllers;
use App\Http\Resources\StudentResource;
use Illuminate\Http\Request;
use App\Models\Student;
use Validator;



class StudentApiController extends Controller
{
// public function index(){
//     $students = Student::all();
//     return response()->json($students,200);
//     //return $this->sendResponse(StudentResponse::collection($students),'Student Retrieved');
//     }
// public function Studentlist(){
//     $students = Student::all();
//     return response()->json($students,200);
//     }
    
// public function StudentEdit(Request $req,$id){   ///Update AND Details
//         $studentedit = Student::find($id);
//         return response()->json($studentedit,200);
//     }

// public function StudentUpdate(Request $req,$id){   ///Update AND Details

//         $validator = Validator::make($req->all(), [
//             'first_name' => 'required',
//             'middle_name' => 'required',
//             'last_name' => 'required',
//             'middle_name' => 'required',
//             'dob' => 'required',
//             'address' => 'required',
//             'zipcode' => 'required',
//             'state' => 'required',
//             'citizenship' => 'required',
//             'residency' => 'required',
//             'mobile_number' => 'required',
//             'user_name' => 'required',
//             'middle_name' => 'required',
//             'middle_name' => 'required',
//         ]);

//         $studentupdate = Student::find($id);
//         $studentupdate->update($req->all());
//         // $studentupdate->first_name = $req->first_name;
//         // $studentupdate->middle_name = $req->middle_name;
//         // $studentupdate->last_name = $req->last_name;
//         // $studentupdate->dob = $req->dob;
//         // $studentupdate->address = $req->address;
//         // $studentupdate->zipcode = $req->zipcode;
//         // $studentupdate->state = $req->state;
//         // $studentupdate->citizenship = $req->citizenship;
//         // $studentupdate->residency = $req->residency;
//         // $studentupdate->mobile_number = $req->mobile_number;
//         // $studentupdate->user_name = $req->user_name;
//         // $studentupdate->update();
//         // return response()->json([
//         //     'Student Data'=>  'updated successfull',
//         // ],200);
//         return $studentupdate;
           
//     }

// public function StudentDelete(Request $req,$id){
//         $studentdelete = Student::find($id);
//         $studentdelete->delete();
//         return response()->json([
//             'Student'=>  'Deleted successfull',
//         ],200);
//     }


}
