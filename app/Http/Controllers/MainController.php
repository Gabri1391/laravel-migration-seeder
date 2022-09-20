<?php

namespace App\Http\Controllers;

use App\Models\Train;


class MainController extends Controller
{
    public function index(){
        $trains = Train::all();
        return view('home', ['trains' => $trains]);
    }
}
