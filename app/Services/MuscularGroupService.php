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
            return response()->json(["message" => "No Exercise found for this group"], 404);
        }
    }
}
