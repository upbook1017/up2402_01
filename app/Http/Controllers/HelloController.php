<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index()
    {
        $data = ['msg' => '名前を入力してください。'];
        return view('hello.index', $data);
    }

    public function post(Request $request)
    {
        $msg = $request->msg;
        $data = [
            'msg' => 'こんにちは' . $msg . '!!!',
        ];
        return view('hello.index', $data);
    }
}
