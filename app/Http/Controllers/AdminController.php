<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function form_admin()
    {
        return view('admin');
    }

    public function traitement_admin(Request $request){
        $request->validate([
            'email'=>'email|required',
            'password'=>'required',
        ]);
        
        $admin = admin ::where('email', $request->input('email'))->first();
        
        if ($admin) {
            if ($admin->password === hash('sha1', $request->input('password'))) {
                $request->session()->put('admins', $admin);
                Auth::login($admin);
                return redirect('/management');
            } else {
                return back()->with('message', 'Identifiant ou mot de passe incorrect!');
            }
        } else {
            return back()->with('message', 'Désolé aucun compte administrateur trouvé pour cette adresse!'); 
        }        
    }

    public function form_management()
    {
        return view('management');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
