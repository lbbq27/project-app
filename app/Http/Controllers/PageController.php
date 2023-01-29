<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // public function layout(){
    //     return view('layout');
    // }
    public function Home(){
        return view('home');
    }
    public function QuienesSomos(){
        return view('quienes-somos');
    }
    public function Contacto(){
        return view('contacto');
    }


}
