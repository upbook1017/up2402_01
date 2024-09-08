<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index()
    {
        $data = ['1', '2', '3', '4', '5'];
        return view('hello.index', ['data' => $data]);
    }
}
