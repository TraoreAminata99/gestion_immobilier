<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class PropertieController extends Controller
{
    //
    public function index()
    {   
        $property = Property::All();
        return view('property',compact('property'));
    }
}
