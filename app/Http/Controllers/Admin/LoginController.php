<?php

namespace App\Http\Controllers\Admin;

use DB;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function login(Request $request) {

		/* Si l'utilisateur est connecté, redirection vers la home */
        if(auth()->check()) {return redirect()->route('home');}

		/* Vérification des données envoyées par l'utilisateur */
    	if($request->isMethod('post')) {
    		$this->validate($request, [
    				'username'	=> 'bail|required',
    				'password'  => 'required|between:3,10',
    			], [
    				'username.required' => 'Username obligatoire',
    				'password.between'  => 'le mot de passe doit être compris entre 3 à 10 caractères',
    				'password.required' => 'le mot de passe est obligatoire'
    		]);

			/* Vérifié vers quelle page envoyer l'utilisateur via les logins de connexion */
    		if(Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
				session()->flash('message', 'Bienvenue dans le dashboard');

                if(Auth::user()->role = 'teacher') {

                    return redirect()->route('teacher/home');
                }
                elseif (Auth::user()->role = 'student') {

                    return redirect()->route('student/home');
                }
                else {

                    return redirect()->route('home');
                }
    		}

    		session()->flash('message', 'Mot de passe ou username invalide');

    		return back()->withInput(['username' => $request->username]);
    	}

    	return view('auth.login');
    }

	/* Déconnexion */
    public function logout() {
        if(auth()->check()) {
        	auth()->logout();

        	session()->flash('message', 'Merci de votre visite.');
        }

    	return redirect()->home();
    }
}
