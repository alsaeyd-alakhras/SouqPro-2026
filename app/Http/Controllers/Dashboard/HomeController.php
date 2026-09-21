<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Actions | Methoeds | Functions

    public function index()
    {
        // retern response (view, json, redicte)
        return view('index');
    }
}
