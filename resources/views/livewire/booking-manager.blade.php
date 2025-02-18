
@extends('layouts.menuDash')

@section('title', 'property')

@section('content')
<x-app-layout>
    <section class="flat-section flat-recommended">
        <div class="container">
            <div class="box-title-listing">
                <div class="box-left">
                    <h3 class="fw-8">Property Listing</h3>
                </div>
            </div>
            <div class="flat-animate-tab">
                <div class="tab-content">
                    <div class="tab-pane active show" id="listLayout" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="homelengo-box list-style-1 line">
                                    <div class="archive-top">
                                        <a href="{{ route('login') }}" class="images-group">
                                            <div class="images-style">
                                                <img class="lazyload" data-src="images/home/house-sm-11.jpg" src="images/home/house-sm-11.jpg" alt="img-property">
                                            </div>
                                            <div class="top">
                                                <ul class="d-flex gap-6 flex-wrap">
                                                    <li class="flag-tag primary">Reserver</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="archive-bottom">
                                        <div class="content-top">
                                            <h6 class="text-capitalize"><a href="{{ route('login') }}" class="link text-line-clamp-1"> Casa Lomas de Machalí Machas</a></h6>
                                            <ul class="meta-list">
                                                <li class="item">
                                                    <i class="icon icon-bed"></i>
                                                    <span class="text-variant-1" style="width: 320px">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit, officia nisi expedita officiis distinctio optio debitis velit beatae quo, quisquam voluptates pariatur alias sint laboriosam.</span>
                                                </li>
                                            </ul>
                                            <div class="location">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <span class="text-line-clamp-1"> 145 Brooklyn Ave, Califonia, New York </span>
                                            </div>
                                        </div>
                                        
                                        <div class="content-bottom">
                                            <h6 class="price">$7250,00</h6>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </section>
</x-app-layout>
@endsection