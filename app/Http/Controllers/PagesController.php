<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function CraftedForYou(){
        return view('CraftedForYou');
    }

    public function experience(){
        return view('experience');
    }

    public function highlights(){
        return view('highlights');
    }

    public function contact(){
        return view('contact');
    }

    public function termandcondition(){
        return view('termsandcondition');
    }

    public function policy(){
        return view('policy');
    }

    public function faq(){
        return view('faq');
    }
}
