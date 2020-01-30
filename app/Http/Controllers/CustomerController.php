<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        // $tabungan = \App\Tabungan::all();
        $customer = Customer::all();
        return $customer;
    }

    public function show($id){
        // $tabungan = \App\Tabungan::findOrFail($id);
        $customer = Customer::findOrFail($id);
        return $customer;
    }

    public function store($code_customer = null, $name = null, $email = null, $country = null, $city = null, $address = null, $contact_number = null){
        $customer = new Customer();
        $customer->code_customer = $code_customer;
        $customer->name = $name;
        $customer->email = $email;
        $customer->country = $country;
        $customer->city = $city;
        $customer->address = $address;
        $customer->contact_number = $contact_number;
        $customer->save();
        return $customer;
    }

    public function edit($id = null, $code_customer = null, $name = null, $email = null, $country = null, $city = null, $address = null, $contact_number = null){
        $customer = Customer::findOrFail($id);
        $customer->code_customer = $code_customer;
        $customer->name = $name;
        $customer->email = $email;
        $customer->country = $country;
        $customer->city = $city;
        $customer->address = $address;
        $customer->contact_number = $contact_number;
        $customer->save();
        return $customer;
    }

    public function delete($id){
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return $customer;
    }
}


