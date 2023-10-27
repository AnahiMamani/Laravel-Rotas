<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

class TesteController extends Controllers
{
    public function teste(int $p1, int $p2){
        return view('site.teste')->with('zzz', $p1);
    }
}