<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Padi;

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
        $datas = Padi::latest();
        return view('pages.home', compact('datas'));
    }
}
