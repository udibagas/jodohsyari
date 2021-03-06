<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home', [
            'sliders' => Post::published()->slide()
                        ->orderBy('created_at', 'DESC')
                        ->limit(3)->get(),
            'artikels' => Post::published()->artikel()
                        ->orderBy('created_at', 'DESC')
                        ->limit(4)->get(),
            'videos' => Post::published()->video()
                        ->orderBy('created_at', 'DESC')
                        ->limit(4)->get()
        ]);
    }
}
