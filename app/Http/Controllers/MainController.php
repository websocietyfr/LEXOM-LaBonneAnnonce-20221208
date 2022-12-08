<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home() {
        return view('main.home');
    }

    public function contact() {
        return view('main.contact');
    }

    public function contactSubmit(Request $request) {
        // traitement du formulaire de contact
    }

    public function cgv() {
        return view('main.cgv');
    }
}
