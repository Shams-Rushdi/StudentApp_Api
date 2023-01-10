<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\StudentApiController;
use App\Http\Controllers\ApiOtherController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::put('student/signup/{id}',[AuthController::class,'signup2']);
//Route::post('/student/signup2',[StudentApiController::class,'SignUp1']);
//Route::post('logout', [AuthController::class, 'logout']);
Route::group(['middleware' =>'auth:sanctum'], function () {
    Route::get('students/list', [StudentApiController::class,'Studentlist']);
    Route::post('/student/add',[StudentApiController::class,'StudentAdd']);

    Route::get('/student/edit/{id}',[StudentApiController::class,'StudentEdit']);
    Route::put('/student/update/{id}',[StudentApiController::class,'StudentUpdate']);
    Route::delete('/student/delete/{id}',[StudentApiController::class,'StudentDelete']);
    Route::post('logout', [AuthController::class, 'logout']);

    Route::get('major/list', [ApiOtherController::class,'major']);  
Route::get('degree/list', [ApiOtherController::class,'degree']);  
Route::get('scholarship/list', [ApiOtherController::class,'scholarship']);  
Route::get('englishtest/list', [ApiOtherController::class,'englishtest']);  
Route::get('otherenglishtest/list', [ApiOtherController::class,'otherenglishtest']);  
Route::get('university/list', [ApiOtherController::class,'university']); 
});    
 

//Route::get('/students/list',[AuthController::class,'Studentlist']);//->middleware('APIAuth');
// Route::post('/student/add',[StudentApiController::class,'StudentAdd']);
// Route::get('/student/edit/{id}',[StudentApiController::class,'StudentEdit']);
// Route::put('/student/update/{id}',[StudentApiController::class,'StudentUpdate']);
// Route::delete('/student/delete/{id}',[StudentApiController::class,'StudentDelete']);

