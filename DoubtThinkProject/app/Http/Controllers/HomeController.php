<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    function index(){
        return view('home.home');
    }

    function login(){
        return view('home.login');
    }

    function videocall(){
        return view('home.videocall', [
            // 'video_url' => Storage::url('testvideo.mp4')
        ]);
    }
    
    function endvideocall(){
        return view('home.endvideocall');
    }
}
