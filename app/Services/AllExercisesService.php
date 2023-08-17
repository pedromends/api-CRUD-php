<?php

namespace App\Services;

use App\Models\AllExercises;

class AllExercisesService
{
    public function getAllExercises()
    {
        $exercises = AllExercises::all();
        if ($exercises) {
            return response()->json($exercises);
        } else {
            return response()->json(["message" => "No Exercises found for this group"], 404);
        }
    }

    public function getExercisesByMuscGroup($id)
    {
        $exercises = AllExercises::where('muscular_group', $id)->get();
        if ($exercises) {
            return response()->json($exercises);
        } else {
            return response()->json(["message" => "No Exercises found for this group"], 404);
        }
    }
}
