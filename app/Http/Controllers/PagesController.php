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
        return view('welcome');
    }
}
