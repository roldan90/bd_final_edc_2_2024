<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login() {
        return view('login');
    }

    public function logear(Request $request){
        $credenciales = $request->only("name","password");
        if (Auth::attempt($credenciales)) {
            return redirect()->route('documentos-problema');
        } else {
            return back()->withErrors(['error' => 'El nombre de usuario o la contraseña son incorrectos'])->withInput($request->only("name"));
        }
    }

    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect()->route('login');
    }

    public function nuevo(){
        $item = new User();
        $item->name = 'admin';
        $item->password = Hash::make('admin');
        $item->email = 'roldan@gmail.com';
        $item->save();
        return $item;
    }
}
