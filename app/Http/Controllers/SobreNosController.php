<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

class SobreNosController extends Controller
{
    public function sobreNos(){
        return view('site.sobre-nos');
    }
}