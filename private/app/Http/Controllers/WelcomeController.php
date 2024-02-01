<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penganten;
use App\Story;
use App\Akad;
use App\Resepsi;

class WelcomeController extends Controller
{
    public function index()
    {
        $penganten = Penganten::all();
        $story = Story::all();
        $akad = Akad::all();
        $resepsi = Resepsi::all();
        return view('welcome', compact('penganten','story', 'akad','resepsi'));
    }
}
