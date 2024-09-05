<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index()
    {
        $data = ['msg' => 'これはBladeを利用した値'];
        return view('hello.index', $data);
    }
}
