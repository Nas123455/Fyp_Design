<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.Admindashboard');
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('login');
    }
}