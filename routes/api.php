<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\StudentController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('students',[StudentController::class,'getAllStudents']);
Route::post('students',[StudentController::class,'addStudent']);
Route::get('students/{id}',[StudentController::class,'getStudentById']);
Route::put('students/edit/{id}',[StudentController::class,'updateStudent']);
Route::delete('students/delete/{id}',[StudentController::class,'deleteUser']);



/* 
php artisan serve  
php artisan make:migration create_student_table
 php artisan migrate
 php artisan make:model Student
 php artisan make:controller api/StudentController
*/