<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;


class RegisterController extends Controller
{
    public function save(Request $request) {
        if(Auth::check()){
            return redirect('todo');
        }
        $validateFields = $request->validate([
            'login'=>'required',
            'password'=>'required'
        ]);

        if(User::where('login',$validateFields['login'])->exists()){
            return redirect('registration')->withErrors([
                'login'=>'Такой пользователь уже существует'
            ]);
        }
        $user = User::create($validateFields);
        if ($user) {
            Auth::login($user);
            return redirect('todo');
        }
        return redirect('login')->withErrors([
            'formError'=>'Произошла ошибка при заполнении формы'
        ]);
    }
}
