<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController3rd extends Controller
{
    public function index()
    {
        $data = [
            'msg'=>'お名前を入力してください。',
        ];
        return view('hello.index', $data);
    }

    public function post(Request $request)
    {
        $msg = $request->msg;
        $data = [
            'msg'=>'こんにちは、' . $msg . 'さん！',
        ];
        return view('hello.index', $data);
    }
}




/* public function index(Request $request)
    {
        $data = [
            'msg'=>'これはコントローラから渡されたメッセージです。',
            'id'=>$request->id
        ];
        return view('hello.index', $data);
    } */