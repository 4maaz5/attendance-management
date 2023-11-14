<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Attendance_Controller;
use App\Http\Controllers\Leave_Controller;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\CrudController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function(){
    return view('welcome');
});
Route::get('/markattendance', [Attendance_Controller::class, 'index'])->name('first');
Route::post('/markattendance', [Attendance_Controller::class, 'create'])->name('markattendance');
Route::get('/markleave', [Leave_Controller::class, 'index'])->name('second');
Route::post('/markleave', [Leave_Controller::class, 'create']);
Route::get('/viewrecord', [SearchController::class, 'search'])->name('viewrecord');
Route::get('/adminattendance',[CrudController::class, 'index']);
Route::get('/adminpage', [Attendance_Controller::class, 'adminpage']);
Route::get('/leaveapproval', [Leave_Controller::class, 'leaveData'])->name('leaveapproval');
Route::get('/viewdata/{id}', [CrudController::class, 'show']);
Route::get('/edit/{id}', [CrudController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [CrudController::class, 'update'])->name('update');
Route::get('/accept/{id}', [CrudController::class, 'accept'])->name('accept');
Route::get('/reject/{id}', [CrudController::class, 'reject'])->name('reject');
Route::get('/delete/{id}', [CrudController::class, 'destroy'])->name('destroy');
Route::get('/report', function(){
    return view('report');
});
Route::get('/report', [ReportController::class, 'report'])->name('report');
Route::get('/login', [Attendance_Controller::class, 'login'])->name('login');
Route::post('/registerr',[ReportController::class, 'registered'])->name('registered');
Route::get('/detail', [ReportController::class, 'detail'])->name('detail');
Route::get('/registerr',function(){
    return view('registerr');
});
// Route::get('/detail',function(){
//     return view('detail');
// });
Route::get('/dashboard',function(){
    return view('userlayout.dashboard');
});
Route::get('/adminlayout',function(){
    return view('adminlayout');
});
