<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class BookingsController extends Controller
{
    //
    public function index()
    {   
        $property = Property::All();
        return view('livewire.booking-manager',compact('property'));
    }

    public function booking(Request $request)
    {   
        $property_id = $request->query('property_id');
        $user_name = Auth::user()->name;
        $booking = Booking::All();

        return view('livewire.booking_form', compact('property_id', 'user_name', 'booking'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'property_id' => 'required|exists:properties,id',
            'start_date' => 'required|date|after_or_equal:today',
            'end_date' => 'required|date|after:start_date',
        ]);

        Booking::create([
            'user_id' => Auth::id(), // Récupère l'ID de l'utilisateur connecté
            'property_id' => $request->property_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'status' => 'pending', // Statut par défaut
        ]);

        return redirect()->route('dashboard')->with('success', 'Réservation effectuée avec succès !');
    }
}
