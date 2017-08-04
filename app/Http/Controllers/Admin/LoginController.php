<?php

namespace App\Http\Controllers\Admin;

use DB;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function login(Request $request) {
    	if($request->isMethod('post')) {
    		$this->validate($request, [
    				'username'		=> 'bail|required',
    				'password'  => 'required|between:3,10',
    				'remember'  => 'in:remember'
    			], [
    				'username.required' 	=> 'Username obligatoire',
    				'password.between'  => 'le mot de passe doit être compris entre 3 à 10 caractères',
    				'password.required' => 'le mot de passe est obligatoire'
    		]);

    		if(Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
				session()->flash('message', 'Bienvenu dans le dashboard');

				return redirect()->intended('dashboard');
    		}

    		session()->flash('message', 'Mot de passe ou username invalide');

    		return back()->withInput(['username' => $request->username]);
    	}

    	return view('auth.login');
    }

    public function logout() {
    	auth()->logout();

    	session()->flash('message', 'Merci de votre visite.');

    	return redirect()->home();
    }
}
