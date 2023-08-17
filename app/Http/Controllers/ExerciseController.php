<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\ExerciseService;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    private $exerciseService;

    public function __construct(ExerciseService $exerciseService)
    {
        $this->exerciseService = $exerciseService;
    }

    public function getExByWorkout($id)
    {
        return $this->exerciseService->getExercisesByWorkout($id);
    }
}
