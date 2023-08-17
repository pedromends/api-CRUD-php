<?php

namespace App\Services;

use App\Models\MuscularGroup;
use App\Models\Orientations;

class OrientationsService
{
    public function getAllOrientations()
    {
        $orientations = Orientations::all();
        if ($orientations) {
            return response()->json($orientations);
        } else {
            return response()->json(["message" => "No Exercise found for this group"], 404);
        }
    }
}
