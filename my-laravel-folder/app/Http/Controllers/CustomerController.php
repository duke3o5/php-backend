<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;


class customerController extends Controller
{
    function addCustomer(Request $req)
    {
        // return $req->input();
        $customer= new Customer;
        $customer->title=$req->name;
        $customer->category=$req->email;
        $customer->color=$req->address;
        $customer->color=$req->passord;
        $customer->save();
        return redirect('addcustomer');
    }
}
