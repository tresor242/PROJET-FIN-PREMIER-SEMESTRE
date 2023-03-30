<?php

namespace App\Http\Controllers;

use App\Models\client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    //
    public function form_welcome()
    {
        return view('welcome');
    }

    public function form_register()
    {
        return view('register');
    }

    public function traitement_register(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'telephone' => 'required',
            'email' => 'email|required|unique:clients',
            'password' => 'required',
        ]);
        $client = new client();
        $client->nom = $request->input('nom');
        $client->prenom = $request->input('prenom');
        $client->telephone = $request->input('telephone');
        $client->email = $request->input('email');
        $client->password = bcrypt($request->input('password'));
        $client->save();

        return redirect('/register')->with('message', 'Votre compte a été créé avec succès!');
    }

    public function traitement_login(Request $request){
        $request->validate([
            'email' => 'email|required',
            'password' => 'required',
        ]);
        $client = client::where('email', $request->input('email'))->first();
        if($client){
            if(Hash::check($request->input('password'), $client->password)){
                $request->session()->put('client', $client);
                return redirect('/accueil');
            }else{
                return back()->with('message', 'Identifiant ou mot de passe incorect!');
            }
        }else{
            return back()->with('message', 'Désolé aucun compte trouvé pour cette adresse!');
        }
    }

    public function form_login()
    {
        return view('login');
    }

    public function reserver()
    {
        return view('booking');
    }

    public function form_gestionClient()
    {
        $users = client::paginate(3);
        return view('gestionClient', [
                'users' => $users
        ]); 
    }

    public function destroy($id)
    {
        $element = Client::findOrFail($id);
        $element->delete();
        return redirect()->back()->with('success', 'Le client a été supprimé avec succès');
    }
}
