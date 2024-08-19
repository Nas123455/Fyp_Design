<?php

// User Dashboard Controller
namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

}
