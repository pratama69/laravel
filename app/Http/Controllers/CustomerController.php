<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = \App\Customer::all();
        return $customer;
    }

    public function show($id)
    {
        $customer = \App\Customer::find($id);
        return $customer;
    }

    public function store($code_customer=null, $name=null, $email=null, $country=null, $city=null, $address=null, $contact_number=null)
    {
        $customer = new Customer();
        $customer->code_costumer = $code_costumer;
        $customer->name = $name;
        $customer->email = $email;
        $customer->country = $country;
        $customer->city = $city;
        $customer->address = $address;
        $customer->contact_number = $contact_number;
        $customer->save();
        return $customer;
    }

    public function edit($id, $code_customer=null, $name=null, $email=null, $country=null, $city=null, $address=null, $contact_number=null)
    {
        $customer = Customer::find($code_customer);
        $customer->code_costumer = $code_costumer;
        $customer->name = $name;
        $customer->email = $email;
        $customer->country = $country;
        $customer->city = $city;
        $customer->address = $address;
        $customer->contact_number = $contact_number;
        $customer->save();
        return $customer;
    }

    public function delete($code_costomer)
    {
        $customer = \App\Customer::find($costomer);
        $customer->delete();
        return $customer;
    }
}


