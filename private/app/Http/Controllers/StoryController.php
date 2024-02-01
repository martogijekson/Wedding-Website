<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Story;

class StoryController extends Controller
{
    
    //
    public function index(){

        $story = Story::all();
       
        return view('story.IndexStory',compact('story'));
    }

    public function create(){
        return view('story.CreateStory');
    }


    public function store(Request $request){
        $data = Story::create($request->all());
        if (!empty($request->file('gambar'))){
            $nama = md5($data->id);
            $folder = 'private/storage/story';
            $extension = $request->file('gambar')->getClientOriginalExtension();
            $file = $nama.".".$extension;
            // ini cek kalau sudah dihapus
            if(file_exists($folder."/".$file)){
                unlink($folder."/".$file);
            }
            // ini proses uploadnya
            if($request->file('gambar')->move($folder, $file)){
                $data->gambar = $folder."/".$file;
                $data->save();
            }
        }

        return redirect(URL('/story'));
    }

    public function edit($id){
        $data= Story::find($id);
        return view('story.EditStory', compact('data'));
    }

    public function update($id, Request $request){
        

        $data = Story::find($id);
        $data->judul = $request->judul;
        $data->tanggal = $request->tanggal;
        $data->keterangan = $request->keterangan;
        
        if(!empty($request->file('gambar'))){ 
            $nama = md5($data->id);
            $folder = 'private/storage/story';
            $extension = $request->file('gambar')->getClientOriginalExtension();
            $file = $nama.".".$extension;
            //ini cek kalau sdh ada hapus
            if(file_exists($folder."/".$file)) {
                unlink($folder."/".$file);
            }
            //ini proses upload nya
            if($request->file('gambar')->move($folder, $file)){
                $data->gambar = $folder."/".$file;
                $data->save();
            }

        }
        $data->save();

        return redirect(URL('/story'));
    }

    public function destroy($id, Request $request){
        $data = Story::find($id);
        if(file_exists($data->gambar)){
            unlink($data->gambar);
        }
        $data->delete();

        return redirect(URL('/story'));
    }


}
