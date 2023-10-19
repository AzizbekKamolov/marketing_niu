<?php

namespace Test\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index()
    {
            return view('student.index');
    }

    public function university()
    {
        return view('site.univer');
    }
}
