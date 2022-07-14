<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function index() {
        // Call from config
        $package = config('package');
        $module = config('module');
        
        // Return view
        return view('index', ["package" => $package, "modules" => $module]);
    }

    //
}
