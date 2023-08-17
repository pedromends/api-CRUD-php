<?php

namespace App\Services;

use App\Models\Modes;

class ModesService
{
    public function getAllModes()
    {
        $modes = Modes::all();
        if ($modes) {
            return response()->json($modes);
        } else {
            return response()->json(["message" => "No Exercise found for this group"], 404);
        }
    }
}
