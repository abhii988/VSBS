<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\booking;

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
        return view('home');
    }
    public function index2()
    {
        return view('centre');
    }
    public function index3()
    {
        return view('accessories');
    }
    public function index4()
    {
        return view('admin.home');
    }
    public function index5()
    {
        return view('admin.service');
    }
    public function index6()
    {
        return view('admin.users');
    }
}
