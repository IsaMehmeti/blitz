<?php

namespace App\Http\Controllers;

use App\Models\Transmission;
use Illuminate\Http\Request;

class TransmissionController extends Controller
{
    public function index()
    {
        $transmissions = Transmission::all();
        return view('transmission.index', compact('transmissions'));
    }
}
