<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller {

	public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
       // dd($request->all());
        if (Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')]))
            return redirect()->intended('home');
        else
            return redirect()->back()->withErrors('El usuario no existe o la contraseña es incorrecta.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.login');
    }

}
