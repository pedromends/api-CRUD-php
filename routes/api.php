<?php

use App\Http\Controllers\AllExercisesController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\ModesController;
use App\Http\Controllers\MuscularGroupController;
use App\Http\Controllers\OrientationsController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TechniquesController;
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

Route::get('hello', [StudentController::class, 'sayHi']);

Route::get('getAllExercises', [ AllExercisesController::class, 'getAllExercises' ]);
Route::get('getExercisesByMuscGroup/{id}', [ AllExercisesController::class, 'getExercisesByMuscGroup' ]);

Route::get('getMuscularGroups', [ MuscularGroupController::class, 'getAllMuscularGroups' ]);

Route::get('getAllModes', [ ModesController::class, 'getAllModes' ]);

Route::get('getOrientations', [ OrientationsController::class, 'getAllOrientations' ]);

Route::get('getTechniques', [ TechniquesController::class, 'getAllTechniques' ]);

Route::get('getExercisesByWorkout/{id}', [ ExerciseController::class, 'getExByWorkout' ]);

//Route::post('create-student',           [StudentController::class, 'createStudent']);
//Route::get('list-student/{id}',         [StudentController::class, 'getStudent']);
//Route::get('list-students',             [StudentController::class, 'getAllStudents']);
//Route::put('update-student/{id}',       [StudentController::class, 'updateStudent']);
//Route::delete('delete-student/{id}',    [StudentController::class, 'deleteStudent']);

