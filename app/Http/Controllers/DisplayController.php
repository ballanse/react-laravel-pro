<?php

namespace App\Http\Controllers;

class DisplayController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function reactView()
    {
        return view('react');
    }

    public function form_test()
    {
        return view('Form.form');
    }
}
