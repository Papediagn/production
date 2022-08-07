<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthentificationController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function authenticate(){

    }
    public function logout(){
        
    }
    
}
