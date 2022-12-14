<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
// return $request->user();
//});

Route::post('create-student',           [StudentController::class, 'createStudent']);
Route::get('list-student/{id}',         [StudentController::class, 'getStudent']);
Route::get('list-students',             [StudentController::class, 'getAllStudents']);
Route::put('update-student/{id}',       [StudentController::class, 'updateStudent']);
Route::delete('delete-student/{id}',    [StudentController::class, 'deleteStudent']);

