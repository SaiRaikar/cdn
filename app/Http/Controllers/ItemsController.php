<?php

namespace cdn\Http\Controllers;

use Illuminate\Http\Request;

class ItemsController extends Controller
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
        return view('items.index');
    }    
    public function add()
    {
        return view('items.add');
    }

}
