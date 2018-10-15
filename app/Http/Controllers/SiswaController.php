<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Siswa;

class SiswaController extends Controller
{
    public function index(){

    	$murid = DB::table('siswa')->get();
        return view('siswa.home',['data' => $murid]);    
    }

    public function index2(){

    	$murid = DB::table('siswa')->get();
        return view('siswa.akun',['data' => $murid]);    
    }

    public function tambah(){
        return view('siswa.tambah');
    }

    public function edit($id){
        $murid = DB::table('siswa')->where('siswaNis', $id)->first();
       return view('siswa.edit',['data' => $murid]);
   	}

    public function show($id){
        $murid = DB::table('siswa')->where('siswaNis', $id)->first();
        return view('siswa.show',['data' => $murid]);
    }

    public function store(Request $request){

        Siswa::create([
         'siswaNis' => $request->siswaNis,
         'siswaNisn' => $request->siswaNisn,
         'siswaNama' => $request->siswaNama,
         'siswaJurusan' => $request->siswaJurusan,
         'siswaGender' => $request->siswaGender
         ]);
         return redirect('/akunsiswa');
     }

     public function update(Request $request){
     Siswa::where('siswaNis', $request->siswaNis)
    ->update([
        //'siswaNis' => $request->siswaNis,
        'siswaNisn' => $request->siswaNisn,
        'siswaNama' => $request->siswaNama,
        'siswaJurusan' => $request->siswaJurusan,
        'siswaGender' => $request->siswaGender
    ]);
     return redirect('/akunsiswa');
    }

}
