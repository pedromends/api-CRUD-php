<?php

namespace App\Http\Controllers;

use App\Services\ModesService;

class ModesController extends Controller
{
    private $modesService;

    public function __construct(ModesService $modesService)
    {
        $this->modesService = $modesService;
    }

    public function getAllModes()
    {
        return $this->modesService->getAllModes();
    }
}
