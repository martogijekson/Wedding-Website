<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resepsi;

class ResepsiController extends Controller
{
    public function index(){

        $resepsi = Resepsi::all();
       
        return view('resepsi.IndexResepsi',compact('resepsi'));
    }

    public function create(){
        return view('resepsi.CreateResepsi');
    }


    public function store(Request $request){
        $data = Resepsi::create($request->all());
        return redirect(URL('/resepsi'));
    }

    public function edit($id){
        $data= Resepsi::find($id);
        return view('resepsi.EditResepsi', compact('data'));
    }

    public function update($id, Request $request){
        $data = Resepsi::find($id);
        $data->nama = $request->nama;
        $data->jam1 = $request->jam1;
        $data->jam2 = $request->jam2;
        $data->tanggal1 = $request->tanggal1;
        $data->tanggal2 = $request->tanggal2;
        $data->keterangan = $request->keterangan;

        
        $data->save();

        return redirect(URL('/resepsi'));
    }

    public function destroy($id, Request $request){
        $data = Resepsi::find($id);
        $data->delete();

        return redirect(URL('/resepsi'));
    }

}
