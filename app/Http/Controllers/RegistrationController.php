<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    //
    public function create() {

    	return view('registration.create');
    }

    public function store() {

    	// validate the user.
    	$this->validate(request(), [
    		'name'=>'required',
    		'email'=>'required|email',
    		'password'=>'required|confirmed'
    	]);

    	// create and save the user.
    	$user=User::create(request(['name','email','password']));

    	// sign them in.
    	auth()->login($user);

    	// redirect the home page.
    	return redirect()->home();


	}
}
