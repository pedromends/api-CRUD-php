<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\HeightService;
use Illuminate\Http\Request;

class HeightController extends Controller
{
    private $heightService;

    public function __construct(HeightService $heightService)
    {
        $this->heightService = $heightService;
    }

    public function getHeights()
    {
        return $this->heightService->getAllHeights();
    }
}
