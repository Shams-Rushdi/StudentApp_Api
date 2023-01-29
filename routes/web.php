<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\DegreeController;
use App\Http\Controllers\EnglishtestController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\OtherenglishtestController;
use App\Http\Controllers\ScholarshipController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[AuthController::class,'login'])->name('ums.login')->middleware('login.user');
Route::post('/',[AuthController::class,'loginSubmit'])->name('ums.login.submit');
Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboardbd')->middleware('logged.user','role.per.admin');

Route::get('/adminprofile/{id}',[AdminController::class,'profileUpdate'])->name('admin.profile');
Route::post('/adminfile',[AdminController::class,'profileUpdateSubmit'])->name('admin.profile.submit');

Route::get('/password',[AdminController::class,'passwordUpdate'])->name('admin.password');
Route::post('/password',[AdminController::class,'passwordUpdateSubmit'])->name('admin.pass.submit');


//Route::get('/',[AuthController::class,'index'])->name('index');
//Route::get('/Dashboard/admin',[DashboardController::class,'dashboard'])->name('dashboard');
//Route::resource('/Dashboard', DashboardController::class);
Route::group(['middleware' => 'logged.user','role.per.admin'], function() {
Route::resource('student', StudentController::class);
Route::resource('admin', AdminController::class);
//Route::get('/adminlist',[AdminController::class,'adminlist'])->name('admin.list');
Route::get('/admintype',[AdminController::class,'admintype'])->name('admin.type.add');
Route::post('/admintype',[AdminController::class,'admintypesubmit'])->name('admin.type.add.submit');

Route::get('/universitylist',[UniversityController::class,'index'])->name('university.list');
Route::resource('university', UniversityController::class);
Route::resource('scholarships', ScholarshipController::class);
Route::resource('degree', DegreeController::class);
Route::resource('major', MajorController::class);
Route::resource('englishtest', EnglishtestController::class);
Route::resource('othertest', OtherenglishtestController::class);
});
// Route::get('/categorylist',[DegreesController::class,'index'])->name('degree.index');
// Route::get('/addcategory',[DegreesController::class,'create'])->name('degree.create');
// Route::post('/addcategory',[DegreesController::class,'store'])->name('degree.store');
// Route::get('/editcategory/{id}',[DegreesController::class,'edit'])->name('degree.edit');
// Route::post('/editcategory',[DegreesController::class,'update'])->name('degree.update');
// Route::get('/showcategory',[DegreesController::class,'show'])->name('degree.show');
//  Route::delete('/del',[DegreesController::class,'destroy'])->name('degree.destroy');

Route::get('/logout',function(){
    session()->forget('user');
    session()->flash('msg','');
    return redirect()->route('ums.login');
})->name('logout');
