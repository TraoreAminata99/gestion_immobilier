
@extends('layouts.menuDash')

@section('title', 'property')

@section('content')
<x-app-layout>
    <div class="main-content">
        
        <div class="main-content-inner"> 
            <div class="widget-box-2 mb-20">
                <h5 class="title" style="color: black; font-size: 30px; text-align: center;">Reserver un bien</h5> 
                    <br>
                    <form action="{{ route('booking.store') }}" method="POST">
                        @csrf
                        <div class="box grid-2 gap-30">
                            <fieldset class="box-fieldset">
                                <label>Name</label>
                                <input type="text" class="form-control" value="{{ $user_name }}" disabled>
                            </fieldset>
                            <fieldset class="box-fieldset">
                                <label>Property ID</label>
                                <input type="text" class="form-control" value="{{ $property_id }}" disabled>
                                <input type="hidden" name="property_id" value="{{ $property_id }}">
                            </fieldset>
                        </div>
                        <div class="box grid-2 gap-30">
                            <fieldset class="box-fieldset">
                                <label>Date d'entrée</label>
                                <input type="date" class="form-control" name="start_date" required>
                            </fieldset>
                            <fieldset class="box-fieldset">
                                <label>Date de sortie</label>
                                <input type="date" class="form-control" name="end_date" required>
                            </fieldset>
                        </div>
                        
                        <button type="submit" class="box-btn tf-btn primary">Reserver</button>
                    </form>
                    
            </div>
        </div>
    </div>
</x-app-layout>
@endsection