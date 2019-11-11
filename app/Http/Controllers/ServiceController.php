<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    function index(){
        $services = \App\Service::all();
        return view('services.index', compact('services'));
    }

    //store data into service db
    function store(){
//        $service =  new \App\Service();
//        $service->name = request('name');
//        $service->save();
        $data = request()->validate([
            'name'=> 'required|min:5'
        ]);
        \App\Service::create($data);

        return redirect()->back();
    }
}
