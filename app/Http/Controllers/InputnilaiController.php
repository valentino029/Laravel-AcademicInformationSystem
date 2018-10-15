<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputnilaiController extends Controller
{
    public function index(){
        return view('inputnilai.home');
    }
}
