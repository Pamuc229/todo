<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request) {
        if(Auth::check()){
            return redirect()->intended('todo');
        }

        $formFields = $request->only(['login','password']);

        if (Auth::attempt($formFields)) {
            return redirect()->intended('todo');
        }
        return redirect('login')->withErrors([
            'formError'=>'Не удалось авторизоваться'
        ]);
    }
}
