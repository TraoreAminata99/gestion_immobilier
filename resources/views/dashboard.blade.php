
    @extends('layouts.menuDash')

    @section('title', 'property')
    
    @section('content')
    <x-app-layout>
      <!-- end sidebar dashboard -->
    @if(session('success'))
        <div class="alert alert-success" style="color: red">
            {{ session('success') }}
        </div>
    @endif
    <div class="main-content">
        <div class="main-content-inner">
            <div class="flat-counter-v2 tf-counter">
                <div class="counter-box">
                    <div class="box-icon">
                        <span class="icon icon-listing"></span>
                    </div>
                    <div class="content-box">
                        <div class="title-count text-variant-1">Accepter</div>
                        <div class="box-count d-flex align-items-end">
                            <!-- <h3 class="number fw-8" data-speed="2000" data-to="17" data-inviewport="yes">32</h3>       -->
                            <h3 class="fw-8">{{ $acceptedCount }}</h3>                                   
                        </div>                              

                    </div>
                </div>
                <div class="counter-box">
                    <div class="box-icon">
                        <span class="icon icon-pending"></span>
                    </div>
                    <div class="content-box">
                        <div class="title-count text-variant-1">Refuser</div>
                        <div class="box-count d-flex align-items-end">
                            <h3 class="fw-8">{{ $bookings->count() }}</h3>                                   
                        </div>                              
                    </div>
                </div>
                <div class="counter-box">
                    <div class="box-icon">
                        <span class="icon icon-favorite"></span>
                    </div>
                    <div class="content-box">
                        <div class="title-count text-variant-1">Attente</div>
                        <div class="d-flex align-items-end">
                            <!-- <h6 class="number" data-speed="2000" data-to="1" data-inviewport="yes">1</h6>  -->
                            <h3 class="fw-8">{{ $pendingCount }}</h3>                                   
                        </div>                              

                    </div>
                </div>
            </div>
            <div class="wrapper-content row">
                <div class="col-xl-12">
                    <div class="widget-box-2 wd-listing">
                        <div class="wrap-table">
                            <div class="table-responsive">

                                <table>
                                <thead>
                                    <tr>
                                        <th>Listing</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($bookings as $booking)
                                        <tr class="file-delete">
                                            <td>
                                                <div class="listing-box">
                                                    <div class="images">
                                                        <img src="{{ asset('storage/' . $booking->property->image) }}" alt="images">
                                                    </div>
                                                    <div class="content">
                                                        <div class="title"><a href="property-details-v1.html" class="link">{{ $booking->property->name }}</a> </div>
                                                        <div class="text-date">{{ $booking->property->address }}</div>
                                                        <div class="text-date"> {{ \Carbon\Carbon::parse($booking->start_date)->translatedFormat('d F Y') }} - 
                                                            {{ \Carbon\Carbon::parse($booking->end_date)->translatedFormat('d F Y') }}</div>
                                                        <div class="text-btn text-primary">{{ number_format($booking->property->price_per_night) }}$</div> 
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="status-wrap">
                                                    <a href="dashboard.html#" class="btn-status"> 
                                                        <span class="badge 
                                                            @if($booking->status == 'pending') bg-warning 
                                                            @elseif($booking->status == 'accepted') bg-success 
                                                            @else bg-danger 
                                                            @endif">
                                                                {{ ucfirst($booking->status) }}
                                                        </span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="list-action">
                                                    @if($booking->status != 'rejected')
                                                        <li><a href="{{ route('booking.edit', $booking->id) }}" class="item">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11.2413 2.9915L12.366 1.86616C12.6005 1.63171 12.9184 1.5 13.25 1.5C13.5816 1.5 13.8995 1.63171 14.134 1.86616C14.3685 2.10062 14.5002 2.4186 14.5002 2.75016C14.5002 3.08173 14.3685 3.39971 14.134 3.63416L4.55467 13.2135C4.20222 13.5657 3.76758 13.8246 3.29 13.9668L1.5 14.5002L2.03333 12.7102C2.17552 12.2326 2.43442 11.7979 2.78667 11.4455L11.242 2.9915H11.2413ZM11.2413 2.9915L13 4.75016" stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg> 
                                                            Modifier</a>
                                                        </li>

                                                        <li><a class="remove-file item">
                                                            <form action="{{ route('booking.cancel', $booking->id) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment annuler cette réservation ?');">
                                                                @csrf
                                                                @method('PATCH')
                                                                <button type="submit" class="remove-file item">
                                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M9.82667 6.00035L9.596 12.0003M6.404 12.0003L6.17333 6.00035M12.8187 3.86035C13.0467 3.89501 13.2733 3.93168 13.5 3.97101M12.8187 3.86035L12.1067 13.1157C12.0776 13.4925 11.9074 13.8445 11.63 14.1012C11.3527 14.3579 10.9886 14.5005 10.6107 14.5003H5.38933C5.0114 14.5005 4.64735 14.3579 4.36999 14.1012C4.09262 13.8445 3.92239 13.4925 3.89333 13.1157L3.18133 3.86035M12.8187 3.86035C12.0492 3.74403 11.2758 3.65574 10.5 3.59568M3.18133 3.86035C2.95333 3.89435 2.72667 3.93101 2.5 3.97035M3.18133 3.86035C3.95076 3.74403 4.72416 3.65575 5.5 3.59568M10.5 3.59568V2.98501C10.5 2.19835 9.89333 1.54235 9.10667 1.51768C8.36908 1.49411 7.63092 1.49411 6.89333 1.51768C6.10667 1.54235 5.5 2.19901 5.5 2.98501V3.59568M10.5 3.59568C8.83581 3.46707 7.16419 3.46707 5.5 3.59568" stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round"/>
                                                                    </svg>  
                                                                    Annulé
                                                                </button>
                                                            </form>
                                                            
                                                            </a>
                                                        </li>
                                                    @endif
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                </table>
                            </div>

                            <ul class="wd-navigation">
                                {{-- {{ $bookings->links() }}  --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@endsection

