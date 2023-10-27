<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

class ContatoController extends Controller
{
    public function contato(){
        return view('site.contato');
    }
}