<?php

use Illuminate\Support\Facades\Route;

Route::get('/','principalController@principal')->name('site.index');
Route::get('/sobre-nos','SobreNosController@sobrenos')->name('site.sobrenos');
Route::get('/contato','ContatoController@contato')->name('site.contato');
Route::get('/login', function(){return'Login';})->name('site.login');
?>