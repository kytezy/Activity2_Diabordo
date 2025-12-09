<?php

namespace App\Http\Controllers;


use App\Services\GreetingService;
use App\Services\MathService;
use App\Services\InfoService;

class ComponentDemoController extends Controller
{    
    public function index(
        GreetingService $greet,
        MathService $math,
        InfoService $info
    ) {
        return [
            "info" => $info->getSystemInfo(),
            "greeting" => $greet->greet("Student"),
            "sum" => $math->add(10, 20)
        ];
    }
    
        
}