@extends('layouts.menu')

@section('title', 'Home')

@section('content')
<!-- Slider -->
<section class="flat-slider home-1">
    <div class="container relative">
        <div class="row">    
            <div class="col-lg-12">
                <div class="slider-content">
                    <div class="heading text-center">
                        <h1 class="title-large text-white animationtext slide">
                            Trouvez votre
                            <span class="tf-text s1 cd-words-wrapper"> 
                                <span class="item-text is-visible">Maison de rêve</span>
                                <span class="item-text is-hidden">Maison parfaite</span>
                            </span>  
                        </h1>
                        <p class="subtitle text-white body-2 wow fadeInUp" data-wow-delay=".2s">Nous sommes une agence immobilière qui vous aidera à trouver la meilleure résidence dont vous rêvez, discutons de la maison de vos rêves ?</p>
                    </div>
                    <div class="flat-tab flat-tab-form">
                        <ul class="nav-tab-form style-1 justify-content-center" role="tablist">
                            <li class="nav-tab-item" role="presentation">   
                                <a href="{{ route('reserver') }}" class="nav-link-item active" >Reservation</a>
                            </li>
                        </ul>
                    </div>
                </div>
                
            </div>    
        </div>
    </div>
    <div class="overlay"></div>
</section> 
<!-- End Slider -->
<!-- Recommended -->
<section class="flat-section flat-recommended">
    <div class="container">
        <div class="box-title text-center wow fadeInUp">
            <div class="text-subtitle text-primary">Propriétés en vedette</div>
            <h3 class="mt-4 title">Recommandé pour vous</h3>
        </div>
        <div class="flat-tab-recommended" >
            <div class="tab-content">
                <div >
                    <div class="row">
                        @foreach ($property as $property_form)
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="homelengo-box">
                                    <div class="archive-top">
                                        <a href="{{ route('reserver') }}" class="images-group">
                                            <div class="images-style">
                                                <img class="lazyload" src="{{ asset('storage/' . $property_form->image) }}" alt="img">
                                            </div>
                                            <div class="top">
                                                <ul class="d-flex gap-6">
                                                    <li class="flag-tag primary">Reserver</li>
                                                </ul>
                                                
                                            </div>
                                            <div class="bottom">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                {{ $property_form->address }}
                                            </div>
                                        </a>
                                        
                                    </div>
                                    <div class="archive-bottom">
                                        <div class="content-top">
                                            <h6 class="text-capitalize"><a href="{{ route('reserver') }}" class="link"> {{ $property_form->name }}</a></h6>
                                                <ul class="meta-list">
                                                    <li class="item">
                                                        <span class="text-variant-1">{{ $property_form->description }}.</span>
                                                    </li>
                                                </ul>
                                            
                                        </div>
                                        
                                        <div class="content-bottom">

                                            <h6 class="price">{{ $property_form->price_per_night }}$</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="{{ route('mypropertie.index') }}" class="tf-btn btn-view primary size-1 hover-btn-view">Voir plus <span class="icon icon-arrow-right2"></span></a>
            </div>
        </div>
    </div>
</section>
<!-- End Recommended -->


@endsection