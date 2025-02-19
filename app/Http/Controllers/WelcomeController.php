<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class WelcomeController extends Controller
{
    //
    public function index()
    {   
        $property = Property::All();
        return view('welcome',compact('property'));
    }
}
