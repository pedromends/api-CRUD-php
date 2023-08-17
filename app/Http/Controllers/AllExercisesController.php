<?php

namespace App\Http\Controllers;

use App\Services\AllExercisesService;


class AllExercisesController extends Controller
{

    private $allExercisesService;

    public function __construct(AllExercisesService $allExercisesService)
    {
        $this->allExercisesService = $allExercisesService;
    }

    public function getAllExercises()
    {
        return $this->allExercisesService->getAllExercises();
    }

    public function getExercisesByMuscGroup($id)
    {
        return $this->allExercisesService->getExercisesByMuscGroup($id);
    }
}
