<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    //Retorna para o usuário o HTML e o CSS montado na view
    public function menu() {
        return(view('menu'));
    }
}
