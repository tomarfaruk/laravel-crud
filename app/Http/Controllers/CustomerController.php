<?php

namespace App\Http\Controllers;
use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    function index(){
        $customers = Customer::all();
        return view('customer.index', compact('customers'));
    }
    function create(){
        return view('customer.create');
    }
    function store(){
        $data = \request()->validate([
           'name'=> 'required|min:5',
           'email' => 'required|email'
        ]);
        Customer::create($data);
        return redirect()->back();
    }

    function edite($id){
        $customer = Customer::findOrFail($id);

        return view('customer.edite', compact('customer'));
    }

    function update($id){
        $data = request()->validate([
            'name' => 'required|min:5',
            'email' => 'required|email'
        ]);
        $customer = Customer::findOrFail($id);
        $customer->update($data);

        return redirect('/customer');
    }

    function destroy($id){
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect('/customer');
    }
}
