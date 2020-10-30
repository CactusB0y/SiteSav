<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function sav()
    {
        return view('infos.contact.sav');
    }

    public function partenariat()
    {
        return view('infos.contact.partenariat');
    }

    public function info()
    {
        return view('infos.contact.info');
    }

    public function front()
    {
        $front = [
            $a = (object) ['nom' => 'Hinata', 'fonction' => 'directrice', 'src' => "/img/Hinata.jpg"],
            $b = (object) ['nom' => 'kakashi', 'fonction' => 'entrainer', 'src' => "/img/Kakashi.png"],
            $c = (object) ['nom' => 'naruto', 'fonction' => 'representant du fc casos', 'src' => "/img/Naruto.png"],
            $d = (object) ['nom' => 'shino', 'fonction' => 'fc chelou', 'src' => "/img/Shino.png"]
        ];
        return view('team.web.dev.frontend', compact('front'));
    }

    public function back()
    {
        $back = [
            $e = (object) ['nom' => 'Hibana', 'fonction' => 'chef brigade 5', 'src' => "/img/Hibana.png"],
            $f = (object) ['nom' => 'Arthur', 'fonction' => 'Roi des chevaliers', 'src' => "/img/Arthur.png"],
            $g = (object) ['nom' => 'Shinra', 'fonction' => 'Demon', 'src' => "/img/Shinra.png"],
            $h = (object) ['nom' => 'Benimaru', 'fonction' => "protecteur d'asakusa", 'src' => "/img/Benimaru.png"]
        ];
        return view('team.web.dev.backend', compact('back'));
    }
}
