<?php

namespace App\Http\Controllers;
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
        $majors = Major::all();
        return response()->json($majors,200);
    }
    public function degree(){
        $degrees = Degree::all();
        return response()->json($degrees,200);
    }
    public function scholarship(){
        $scholarships = Scholarship::all();
        return response()->json($scholarships,200);
    }
    public function englishtest(){
        $englishtests = EnglishTest::all();
        return response()->json($englishtests,200);
    }
    public function otherenglishtest(){
        $otherenglishtests = Otherenglishtest::all();
        return response()->json($otherenglishtests,200);
    }
    public function university(){
        $university = University::all();
        return response()->json($universitys,200);
    }
}
