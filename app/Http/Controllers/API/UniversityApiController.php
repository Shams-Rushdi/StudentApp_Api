<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\University;

class UniversityApiController extends Controller
{
    public function index(){
        $university = University::latest()->get();
        return response()->json($university,200);
        }
}
