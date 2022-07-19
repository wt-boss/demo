<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bookcontroller extends Controller
{
    public function create() {
        return view('book');
    }

    public function store(Request $request) {
        
        var_dump($request->all());
        // la méthode qui récupèrera les données du formulaire
    }
}
