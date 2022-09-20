<?php

namespace App\Http\Controllers;

use App\Models\Train;


class MainController extends Controller
{
    public function index(){
        return view('home');
    }
}
