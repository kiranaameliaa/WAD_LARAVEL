<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParkingController extends Controller
{
    public function index()
    {
        $data = Parking::all();
        return view('parkir.index', compact('data'));
    }
}
