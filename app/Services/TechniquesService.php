<?php

namespace App\Services;

use App\Models\MuscularGroup;
use App\Models\Orientations;
use App\Models\Techniques;

class TechniquesService
{
    public function getAllTechniques()
    {
        $techniques = Techniques::all();
        if ($techniques) {
            return response()->json($techniques);
        } else {
            return response()->json(["message" => "No Exercises found for this group"], 404);
        }
    }
}
