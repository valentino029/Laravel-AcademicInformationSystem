<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Guru;

class GuruController extends Controller
{
    public function index(){

    	$pegawai = DB::table('guru')->get();
        return view('guru.home',['data' => $pegawai]);    
    }

    public function index2(){

        $pegawai = Guru::get();
        //dd($pegawai);
        return view('guru.akun',['data' => $pegawai]);    
    }

    public function tambah(){
        return view('guru.tambah');
    }

    public function show($id){
        $pegawai = DB::table('guru')->where('guruNigs', $id)->first();
        return view('guru.show',['data' => $pegawai]);
    }

    public function edit($id){
        $pegawai = DB::table('guru')->where('guruNigs', $id)->first();
       return view('guru.edit',['data' => $pegawai]);
   }

   public function store(Request $request){

        //Validation
        $validateData = $request->validate([
            'guruNigs' => 'required|min:5|max:75',
            'guruNip' => 'required|min:5|max:75',
            'guruNama' => 'required|min:5|max:75',
            'guruKurikulum' => 'required|min:5|max:75',
            'guruJurusan' => 'required|min:5|max:75',
        ]);

        // Insert use query builder
        //     DB::table('guru')->insert(
        //     ['guruNigs' => $request->guruNigs,
        //      'guruNip' => $request->guruNip,
        //      'guruNama' => $request->guruNama,
        //      'guruKurikulum' => $request->guruKurikulum,
        //      'guruJurusan' => $request->guruJurusan]
        // );
    
        Guru::create([
         'guruNigs' => $request->guruNigs,
         'guruNip' => $request->guruNip,
         'guruNama' => $request->guruNama,
         'guruKurikulum' => $request->guruKurikulum,
         'guruJurusan' => $request->guruJurusan
         ]);
         return redirect('/akunguru');
         }

    public function update(Request $request){
     Guru::where('guruNigs', $request->guruNigs)
    ->update([
        'guruNip' => $request->guruNip,
        'guruNama' => $request->guruNama,
        'guruKurikulum' => $request->guruKurikulum,
        'guruJurusan' => $request->guruJurusan
    ]);
     return redirect('/akunguru');
    }

    public function destroy($id)
    {
        $pegawai = Guru::where('guruNigs','=',$id);
        $pegawai ->delete();

        return redirect('/akunguru');
    }
}
