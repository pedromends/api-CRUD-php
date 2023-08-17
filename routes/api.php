<?php

use App\Http\Controllers\AllExercisesController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\HeightController;
use App\Http\Controllers\ModesController;
use App\Http\Controllers\MuscularGroupController;
use App\Http\Controllers\OrientationsController;
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


Route::post('create-new-ex', [ ExerciseController::class, 'createNewExercise' ]);

Route::get('get-all-exercises', [ AllExercisesController::class, 'getAllExercises' ]);

Route::get('get-exercises-by-musc-group/{id}', [ AllExercisesController::class, 'getExercisesByMuscGroup' ]);

Route::get('get-muscular-groups', [ MuscularGroupController::class, 'getAllMuscularGroups' ]);

Route::get('get-all-modes', [ ModesController::class, 'getAllModes' ]);

Route::get('get-orientations', [ OrientationsController::class, 'getAllOrientations' ]);

Route::get('get-techniques', [ TechniquesController::class, 'getAllTechniques' ]);

Route::get('get-exercises-by-workout/{id}', [ ExerciseController::class, 'getExByWorkout' ]);

Route::get('get-heights', [ HeightController::class, 'getHeights' ]);

//Route::post('create-student',           [StudentController::class, 'createStudent']);
//Route::get('list-student/{id}',         [StudentController::class, 'getStudent']);
//Route::get('list-students',             [StudentController::class, 'getAllStudents']);
//Route::put('update-student/{id}',       [StudentController::class, 'updateStudent']);
//Route::delete('delete-student/{id}',    [StudentController::class, 'deleteStudent']);

