<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
        return inertia('About');
    }

    public function innovation(){
        return inertia('Innovation');
    }

    public function policy(){
        return inertia('policy');
    }

    public function education(){
        return inertia('Education');
    }
    public function publications(){
        return inertia('Publications');
    }
}
