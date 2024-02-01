<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Akad;

class AkadController extends Controller
{
    
    public function index(){

        $akad = Akad::all();
       
        return view('akad.IndexAkad',compact('akad'));
    }

    public function create(){
        return view('akad.CreateAkad');
    }


    public function store(Request $request){
        $data = Akad::create($request->all());
        return redirect(URL('/akad'));
    }

    public function edit($id){
        $data= Akad::find($id);
        return view('akad.EditAkad', compact('data'));
    }

    public function update($id, Request $request){
        $data = Akad::find($id);
        $data->nama = $request->nama;
        $data->jam1 = $request->jam1;
        $data->jam2 = $request->jam2;
        $data->tanggal1 = $request->tanggal1;
        $data->tanggal2 = $request->tanggal2;
        $data->keterangan = $request->keterangan;

        
        $data->save();

        return redirect(URL('/akad'));
    }

    public function destroy($id, Request $request){
        $data = Akad::find($id);
        $data->delete();

        return redirect(URL('/akad'));
    }


}


