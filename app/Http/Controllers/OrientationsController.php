<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\OrientationsService;
use Illuminate\Http\Request;

class OrientationsController extends Controller
{
    private $orientationsService;

    public function __construct(OrientationsService $orientationsService)
    {
        $this->orientationsService = $orientationsService;
    }

    public function getAllOrientations()
    {
        return $this->orientationsService->getAllOrientations();
    }
}
