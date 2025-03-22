<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BabidiController extends Controller
{
    public function index(){
        return view("babidi.index");
    }
}
