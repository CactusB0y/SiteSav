<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/sav', function () {
    return view('infos.contact.sav');
});

Route::get('/partenariat', function () {
    return view('infos.contact.partenariat');
});

Route::get('/info', function () {
    return view('infos.contact.info');
});

Route::get('/frontend', function () {
    $front = [
        $a = (object) ['nom' => 'Hinata', 'fonction' => 'directrice', 'src' => "/img/Hinata.jpg"],
        $b = (object) ['nom' => 'kakashi', 'fonction' => 'entrainer', 'src' => "/img/Kakashi.png"],
        $c = (object) ['nom' => 'naruto', 'fonction' => 'representant du fc casos', 'src' => "/img/Naruto.png"],
        $d = (object) ['nom' => 'shino', 'fonction' => 'fc chelou', 'src' => "/img/Shino.png"]
    ];
    return view('team.web.dev.frontend' ,compact('front'));
});

Route::get('/backend', function () {
    $back = [
        $e = (object) ['nom' => 'Hibana', 'fonction' => 'chef brigade 5', 'src' => "/img/Hibana.png"],
        $f = (object) ['nom' => 'Arthur', 'fonction' => 'Roi des chevaliers', 'src' => "/img/Arthur.png"],
        $g = (object) ['nom' => 'Shinra', 'fonction' => 'Demon', 'src' => "/img/Shinra.png"],
        $h = (object) ['nom' => 'Benimaru', 'fonction' =>"protecteur d'asakusa", 'src' => "/img/Benimaru.png"]
    ];
    return view('team.web.dev.backend', compact('back'));
});
