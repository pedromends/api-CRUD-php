<?php

namespace App\Services;

use App\Models\AllExercises;
use App\Models\Exercise;
use App\Models\Height;
use App\Models\Modes;
use App\Models\Orientations;
use App\Models\Techniques;

class ExerciseService
{

    public function createNewExercise($data)
    {
        if ($data) {
            $new = [
                'workout_id' => 2,
                'exercises_id' => $data['exercise'],
                'mode_id' =>   $data['mode'],
                'technique_id' => $data['technique'],
                'series' =>  $data['series'],
                'repetitions' => $data['repetitions'],
                'height_id' => $data['height'],
                'orientation_id' => $data['orientation'],
            ];
            Exercise::create($new);
            return response()->json(["message" => "Exercício registrado com sucesso"], 200);
        } else {
            return response()->json(["message" => "No Exercise found for this group"], 404);
        }
    }

    public function getExercisesByWorkout($id)
    {
        $raw = Exercise::where('workout_id', $id)->get();
        $exercises = collect();

        if ($raw) {
            foreach ($raw as $item){
                $new = [
                    'id' => $item['id'],
                    'workout_id' => $item['workout_id'],
                    'exercise' => AllExercises::where('id', $item['exercises_id'])->first()->description,
                    'mode' =>   Modes::where('id', $item['mode_id'])->first()->description,
                    'technique' => Techniques::where('id', $item['technique_id'])->first()->description,
                    'series' =>  $item['series'],
                    'repetitions' => $item['repetitions'],
                    'height' => Height::where('id', $item['height_id'])->first()->description,
                    'orientation' => Orientations::where('id', $item['orientation_id'])->first()->description,
                ];
                $exercises->push($new);
            }
            return response()->json($exercises);
        } else {
            return response()->json(["message" => "No Exercise found for this group"], 404);
        }
    }
}
