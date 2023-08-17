<?php

namespace App\Services;

use App\Models\AllExercises;
use App\Models\Exercise;
use App\Models\Height;
use App\Models\Modes;
use App\Models\Orientations;
use App\Models\Techniques;

class HeightService
{
    public function getAllHeights()
    {
        $heights = Height::all();

        if ($heights) {
            return response()->json($heights);
        } else {
            return response()->json(["message" => "No Exercise found for this group"], 404);
        }
    }
}
