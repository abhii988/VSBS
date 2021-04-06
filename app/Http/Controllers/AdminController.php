<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function index1()
    {
        return view('admin.service');
    }

    public function index2()
    {
        return view('admin.users');
    }
}
