<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MatapelajaranController extends Controller
{
    public function index(){

    	$kurikulum = DB::table('mata_pelajaran')->get();
        return view('matapelajaran.home',['data' => $kurikulum]);    
    }
}
