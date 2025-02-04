<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function auth(Request $request) {
        $credenciais = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ],
        [
            'email.required' => 'o campo email é obrigatório',
            'password.email' => 'insira um email válido',
            'password.required' => 'o campo senha é obrigatório',
        ]);
        
        if (Auth::attempt($credenciais)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin/dashboard');
        } else {
            return redirect()->back()->with('mensagem', 'usuário ou senha inválida');
        }
    }
}
