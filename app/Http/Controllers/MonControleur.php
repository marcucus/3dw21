<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;

class MonControleur extends Controller
{
    public function retourneMembreCss() {
        $nom = 'Picard';
        $prenom = 'Jean-Luc';
        return view('pages_site/membrescss',compact('nom','prenom')); }
}