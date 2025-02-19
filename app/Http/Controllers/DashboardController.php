<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {   
        // Récupérer les réservations de l'utilisateur connecté avec les détails du bien
        $bookings = Booking::where('user_id', Auth::id())
                    ->with('property') // Charger les détails du bien
                    ->get();

        $pendingCount = $bookings->where('status', 'pending')->count();
        $acceptedCount = $bookings->where('status', 'accepted')->count();
        $rejectedCount = $bookings->where('status', 'rejected')->count();

        return view('dashboard', compact('bookings','pendingCount', 'acceptedCount', 'rejectedCount'));
    }

    public function cancel(Booking $booking)
    {
        // Vérifier que l'utilisateur connecté est bien le propriétaire de la réservation
        if ($booking->user_id !== Auth::id()) {
            return redirect()->back()->with('error', 'Action non autorisée.');
        }

        // Modifier le statut en "annulé"
        $booking->status = 'rejected';
        $booking->save();

        return redirect()->back()->with('success', 'Réservation annulée avec succès.');
    }

    public function edit(Booking $booking)
    {
        if ($booking->user_id !== Auth::id()) {
            return redirect()->back()->with('error', 'Action non autorisée.');
        }
        $user_name = Auth::user()->name; 
        $property_id = $booking->property_id;

        return view('livewire.booking_edit', compact('booking', 'user_name', 'property_id'));
    }


    public function update(Request $request, Booking $booking)
    {
        if ($booking->user_id !== Auth::id()) {
            return redirect()->back()->with('error', 'Action non autorisée.');
        }

        $request->validate([
            'start_date' => 'required|date|after_or_equal:today',
            'end_date' => 'required|date|after:start_date',
        ]);

        $booking->update([
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'status' => 'pending', //mise ajout du status
        ]);

        return redirect()->route('dashboard')->with('success', 'Réservation mise à jour avec succès.');
    }


}
