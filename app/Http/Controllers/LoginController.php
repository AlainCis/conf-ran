<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function index(){
        return view("auth.login");
    }
    public function doLogin(LoginRequest $request){
        $credentials = $request->validated();
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('conference.index'));
        }else{
            return to_route('auth.login')->withErrors($credentials)->onlyInput('email');
        }
        
    }
    public function register(){
        return view("auth.register");
    }
    public function logout(){
        Auth::logout();
        return to_route('auth.login')->with("message", "Déconnexion effectuée succès ! Veuiller vous reconnectez");
    }
    public function doRegister(UserRequest $request){
        $validated = $request->validated();
        if ($validated)
        {
            User::firstOrCreate($validated);
            return to_route('auth.login')->with("message", "Compte crée avec succès ! Veuiller vous connectez");
        }else{
            return to_route('auth.register')->withErrors();
        }
    }
}
