<?php

namespace App\Services;

use App\Models\AllExercises;
use App\Models\Exercises;
use App\Models\Height;
use App\Models\Modes;
use App\Models\Orientations;
use App\Models\Techniques;

class ExerciseService
{
    public function getExercisesByWorkout($id)
    {
        $raw = Exercises::where('workout_id', $id)->get();
        $exercises = collect();

        if ($raw) {
            foreach ($raw as $item){
                $new = [
                    'id' => $item['id'],
                    'workout_id' => $item['workout_id'],
                    'exercise' => AllExercises::where('id', $item['exercise_id'])->first()->description,
                    'series' =>  $item['series'],
                    'repetitions' => $item['repetitions'],
                    'height' => Height::where('id', $item['height_id'])->first()->description,
                    'mode' =>   Modes::where('id', $item['mode_id'])->first()->description,
                    'technique' => Techniques::where('id', $item['technique_id'])->first()->description,
                    'orientation' => Orientations::where('id', $item['orientation_id'])->first()->description,
                ];
                $exercises->push($new);
            }
            return response()->json($exercises);
        } else {
            return response()->json(["message" => "No Exercises found for this group"], 404);
        }
    }
}
