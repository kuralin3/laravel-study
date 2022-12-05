<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestSampleController extends Controller
{
    public function form()
    {
        return view('form');
    }

    public function query(Request $request)
    {
        $keyword = $request->get('keyword', 'default');
        return 'キーワードは' . $keyword . 'です。';
    }

    public function login(Request $request)
    {
        if ($request->get('email') === 'anikar@example.com' && $request->get('password') === 'password') {
            return 'ログイン成功';
        }
        return 'ログイン失敗';
    }
    
    public function loginForm(Request $request)
    {
        return view('login');
    }
}
