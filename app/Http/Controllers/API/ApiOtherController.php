<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\University;
use App\Models\Degree;
use App\Models\Scholarship;
use App\Models\Major;
use App\Models\EnglishTest;
use App\Models\Otherenglishtest;
use Illuminate\Http\Request;

class ApiOtherController extends Controller
{
    public function major(){
        $majors = Major::latest()->get();
        return response()->json($majors,200);
    }
    public function degree(){
        $degrees = Degree::latest()->get();
        return response()->json($degrees,200);
    }
    public function scholarship(){
        $scholarships = Scholarship::latest()->get();
        return response()->json($scholarships,200);
    }
    public function englishtest(){
        $englishtests = EnglishTest::latest()->get();
        return response()->json($englishtests,200);
    }
    public function otherenglishtest(){
        $otherenglishtests = Otherenglishtest::latest()->get();
        return response()->json($otherenglishtests,200);
    }
    public function university(){
        //$universitys =University::with(['scholarship', 'childs.scholarship'])->where('id', $universities->id)->get();
        //$university = University::whereNull('id')->with('childrenUniversity','scholarship')->get();
        //$university = University::latest()->get();
        //$scholarships = Scholarship::whereIn('university_id', [$university->id]);
        //$scholarships = Scholarship::with('university')->find($id);
        //return response()->json($universitys,$scholarships,200);
        $university = University::with('scholarships')->get();
        return response()->json($university);
    }
}
