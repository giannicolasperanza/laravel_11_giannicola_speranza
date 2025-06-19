<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenericController extends Controller
{
    //

    public function homepage(){
        return view('welcome');
    }
}
