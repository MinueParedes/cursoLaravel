<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function getName($name){

        return view('welcome', ['Nombre:'=> $name]);
    }
    public function index(){
        $x=15;
        $y=1584;
        echo 'la suma es: '.$this->sumar($x,$y);
    }
    public function sumar(){
        $x=174;
        $y=150;
        return $x+$y;
    }
    public function restar(){
        $x=174;
        $y=150;
        return $x-$y;
    }
    public function multiplicar(){
        $x=174;
        $y=150;
        return $x*$y;
    }
    public function dividir(){
        $x=174;
        $y=150;
        return $x/$y;
    }
}
