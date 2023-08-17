<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\TechniquesService;
use Illuminate\Http\Request;

class TechniquesController extends Controller
{
    private $techniquesService;

    public function __construct(TechniquesService $techniquesService)
    {
        $this->techniquesService = $techniquesService;
    }

    public function getAllTechniques()
    {
        return $this->techniquesService->getAllTechniques();
    }
}
