<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Kategori;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cekkategori = Team::where('user_id',auth()->user()->id)->count();
        if($cekkategori<1){
            $kategoris = Kategori::all();
            return view('kategori')->with(compact('kategoris'));
        }
        else {
            return view('dashboard');
        }

    }
}