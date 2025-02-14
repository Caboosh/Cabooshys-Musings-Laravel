<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function Homepage() {
        return view('home');
    }

    public function Blog() {
        return view('blog');
    }

    public function CBSH() {
        return view('cbsh');
    }

    public function CarStuff() {
        return view('car-stuff');
    }

    public function VapeStuff() {
        return view('vape-stuff');
    }

    public function FPVDrones() {
        return view('drones');
    }
}
