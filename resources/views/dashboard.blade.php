
    @extends('layouts.menuDash')

    @section('title', 'property')
    
    @section('content')
    <x-app-layout>
      <!-- end sidebar dashboard -->
    <div class="main-content">
        <div class="main-content-inner">
            <div class="button-show-hide show-mb">
                <span class="body-1">Show Dashboard</span>
            </div>
            <div class="flat-counter-v2 tf-counter">
                <div class="counter-box">
                    <div class="box-icon">
                        <span class="icon icon-listing"></span>
                    </div>
                    <div class="content-box">
                        <div class="title-count text-variant-1">Your listing</div>
                        <div class="box-count d-flex align-items-end">
                            <!-- <h3 class="number fw-8" data-speed="2000" data-to="17" data-inviewport="yes">32</h3>       -->
                            <h3 class="fw-8">32</h3>                                   
                            <span class="text">/50 remaining</span>
                        </div>                              

                    </div>
                </div>
                <div class="counter-box">
                    <div class="box-icon">
                        <span class="icon icon-pending"></span>
                    </div>
                    <div class="content-box">
                        <div class="title-count text-variant-1">Pending</div>
                        <div class="box-count d-flex align-items-end">
                            <h3 class="fw-8">02</h3>                                   
                        </div>                              
                    </div>
                </div>
                <div class="counter-box">
                    <div class="box-icon">
                        <span class="icon icon-favorite"></span>
                    </div>
                    <div class="content-box">
                        <div class="title-count text-variant-1">Favorites</div>
                        <div class="d-flex align-items-end">
                            <!-- <h6 class="number" data-speed="2000" data-to="1" data-inviewport="yes">1</h6>  -->
                            <h3 class="fw-8">06</h3>                                   
                        </div>                              

                    </div>
                </div>
                <div class="counter-box">
                    <div class="box-icon">
                        <span class="icon icon-review"></span>
                    </div>
                    <div class="content-box">
                        <div class="title-count text-variant-1">Reviews</div>
                        <div class="d-flex align-items-end">
                            <h3 class="fw-8">1.483</h3>                                   
                        </div>                              

                    </div>
                </div>
            </div>
            <div class="wrapper-content row">
                <div class="col-xl-9">
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
                                    <tr class="file-delete">
                                        <td>
                                            <div class="listing-box">
                                                <div class="images">
                                                    <img src="images/home/house-18.jpg" alt="images">
                                                </div>
                                                <div class="content">
                                                    <div class="title"><a href="property-details-v1.html" class="link">Gorgeous Apartment Building</a> </div>
                                                    <div class="text-date">Posting date: March 22, 2024</div>
                                                    <div class="text-btn text-primary">$7,500</div> 
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status-wrap">
                                                <a href="dashboard.html#" class="btn-status"> Approved</a>
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="list-action">
                                                <li><a class="remove-file item">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M9.82667 6.00035L9.596 12.0003M6.404 12.0003L6.17333 6.00035M12.8187 3.86035C13.0467 3.89501 13.2733 3.93168 13.5 3.97101M12.8187 3.86035L12.1067 13.1157C12.0776 13.4925 11.9074 13.8445 11.63 14.1012C11.3527 14.3579 10.9886 14.5005 10.6107 14.5003H5.38933C5.0114 14.5005 4.64735 14.3579 4.36999 14.1012C4.09262 13.8445 3.92239 13.4925 3.89333 13.1157L3.18133 3.86035M12.8187 3.86035C12.0492 3.74403 11.2758 3.65574 10.5 3.59568M3.18133 3.86035C2.95333 3.89435 2.72667 3.93101 2.5 3.97035M3.18133 3.86035C3.95076 3.74403 4.72416 3.65575 5.5 3.59568M10.5 3.59568V2.98501C10.5 2.19835 9.89333 1.54235 9.10667 1.51768C8.36908 1.49411 7.63092 1.49411 6.89333 1.51768C6.10667 1.54235 5.5 2.19901 5.5 2.98501V3.59568M10.5 3.59568C8.83581 3.46707 7.16419 3.46707 5.5 3.59568" stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>  
                                                    Annulé</a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>

                            <ul class="wd-navigation">
                                <li><a href="dashboard.html#" class="nav-item"><i class="icon icon-arr-l"></i></a></li>
                                <li><a href="dashboard.html#" class="nav-item">1</a></li>
                                <li><a href="dashboard.html#" class="nav-item">2</a></li>
                                <li><a href="dashboard.html#" class="nav-item active">3</a></li>
                                <li><a href="dashboard.html#" class="nav-item">4</a></li>
                                <li><a href="dashboard.html#" class="nav-item">...</a></li>
                                <li><a href="dashboard.html#" class="nav-item"><i class="icon icon-arr-r"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@endsection

