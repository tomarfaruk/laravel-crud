<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    function index(){
        $title = "hello this lemon bra";
        return view('wp', compact('title'));
    }
    function about(){
        $services = \App\Service::all();
        return view('about', compact('services'));
    }
}
