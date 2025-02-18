<?php

namespace App\Livewire;

use Livewire\Component;

class BookingManager extends Component
{
    public $bookings;
    
    public function mount()
    {
        $this->bookings = Booking::all();
    }

    public function render()
    {
        
        return view('livewire.booking-manager');
    }
}
