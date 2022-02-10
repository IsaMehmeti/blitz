<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customer.index', compact('customers'));
    }

    public function show($id)
    {
        $customer = Customer::find($id);
        return view('customer.show', compact('customer'));
    }
}
