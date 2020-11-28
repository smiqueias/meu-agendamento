<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //Retorna para o usuário o HTML e o CSS montado na view
    public function login() {
        return (view("login"));
    }
}
