<?php

namespace App\Http\Controllers;


use App\Services\MuscularGroupService;

class MuscularGroupController extends Controller
{
    private $muscularGroupService;

    public function __construct(MuscularGroupService $muscularGroupService)
    {
        $this->muscularGroupService = $muscularGroupService;
    }

    public function getAllMuscularGroups()
    {
        return $this->muscularGroupService->getAllMuscularGroups();
    }
}
