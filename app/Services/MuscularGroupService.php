<?php

namespace App\Services;

use App\Models\MuscularGroup;

class MuscularGroupService
{
    public function getAllMuscularGroups()
    {
        $muscularGroups = MuscularGroup::all();
        if ($muscularGroups) {
            return response()->json($muscularGroups);
        } else {
            return response()->json(["message" => "No Exercises found for this group"], 404);
        }
    }
}
