<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

class SobreNosController extends Controllers
{
    public function sobreNos(){
        return view('site.sobre-nos');
    }
}