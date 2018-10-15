<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManajemenkelasController extends Controller
{
    public function index(){
        return view('manajemenkelas.home');
    }
}
