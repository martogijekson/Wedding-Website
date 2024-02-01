<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penganten;

class PengantenController extends Controller
{
public function index(){

    $penganten = Penganten::all();
   
    return view('penganten.IndexPenganten',compact('penganten'));
}

public function create(){
    return view('penganten.CreatePenganten');
}

public function store(Request $request){
    $data = Penganten::create($request->all());
    if (!empty($request->file('gambar1'))){
        $nama = md5($data->id);
        $folder = 'private/storage/penganten';
        $extension = $request->file('gambar1')->getClientOriginalExtension();
        $file = $nama.".".$extension;
        // ini cek kalau sudah dihapus
        if(file_exists($folder."/".$file)){
            unlink($folder."/".$file);
        }
        // ini proses uploadnya
        if($request->file('gambar1')->move($folder, $file)){
            $data->gambar1 = $folder."/".$file;
            $data->save();
        }
    }

    if (!empty($request->file('gambar2'))){
        $nama = md5($data->id);
        $folder = 'private/storage/penganten';
        $extension = $request->file('gambar2')->getClientOriginalExtension();
        $file = $nama.".".$extension;
        // ini cek kalau sudah dihapus
        if(file_exists($folder."/".$file)){
            unlink($folder."/".$file);
        }
        // ini proses uploadnya
        if($request->file('gambar2')->move($folder, $file)){
            $data->gambar2 = $folder."/".$file;
            $data->save();
        }
    }

    return redirect(URL('/penganten'));
}

public function edit($id){
    $data= Penganten::find($id);
    return view('penganten.EditPenganten', compact('data'));
}

public function update($id, Request $request){
    

    $data = Penganten::find($id);
    $data->salam = $request->salam;
    $data->tanggal = $request->tanggal;
    $data->title = $request->title;
    $data->nama1 = $request->nama1;
    $data->keterangan1 = $request->keterangan1;
    $data->nama2 = $request->nama2;
    $data->keterangan2 = $request->keterangan2;
    if (!empty($request->file('gambar1'))) { 
        $namaGambar1 = md5($data->id) . "_gambar1"; // Menggunakan nama yang berbeda untuk gambar pertama
        $folderGambar1 = 'private/storage/penganten'; // Folder untuk gambar pertama
        $extensionGambar1 = $request->file('gambar1')->getClientOriginalExtension();
        $fileGambar1 = $namaGambar1 . "." . $extensionGambar1;
        
        // Hapus gambar lama jika ada
        if (file_exists($folderGambar1 . "/" . $fileGambar1)) {
            unlink($folderGambar1 . "/" . $fileGambar1);
        }
        
        // Proses upload gambar pertama
        if ($request->file('gambar1')->move($folderGambar1, $fileGambar1)) {
            $data->gambar1 = $folderGambar1 . "/" . $fileGambar1;
        }
    }

    if (!empty($request->file('gambar2'))) { 
        $namaGambar2 = md5($data->id) . "_gambar2"; // Menggunakan nama yang berbeda untuk gambar kedua
        $folderGambar2 = 'private/storage/penganten'; // Folder untuk gambar kedua
        $extensionGambar2 = $request->file('gambar2')->getClientOriginalExtension();
        $fileGambar2 = $namaGambar2 . "." . $extensionGambar2;
        
        // Hapus gambar lama jika ada
        if (file_exists($folderGambar2 . "/" . $fileGambar2)) {
            unlink($folderGambar2 . "/" . $fileGambar2);
        }
        
        // Proses upload gambar kedua
        if ($request->file('gambar2')->move($folderGambar2, $fileGambar2)) {
            $data->gambar2 = $folderGambar2 . "/" . $fileGambar2;
        }
    }

    $data->save();

    return redirect(URL('/penganten'));
}

public function destroy($id, Request $request){
    $data = Penganten::find($id);
    if(file_exists($data->foto)){
        unlink($data->foto);
    }
    $data->delete();

    return redirect(URL('/penganten'));
}


}
