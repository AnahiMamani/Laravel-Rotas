<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

class principalController extends Controllers
{
    public function principal(){
        return view('site.principal');
    }
}