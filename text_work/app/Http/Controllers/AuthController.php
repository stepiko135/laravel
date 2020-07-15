<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function post(RegisterRequest $request)
    {
        $data=[
            'name'=>$request->name,
            'msg'=>'You are logged in!',

        ];
        return view('welcome',$data);
    }
}
