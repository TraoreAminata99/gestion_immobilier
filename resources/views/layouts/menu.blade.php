<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Gestion immobilière</title>
        <meta name="keywords" content="HTML, CSS, JavaScript, Bootstrap">
        <meta name="description" content="Real Estate HTML Template">
        <meta name="author" content="themesflat.com">
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
    
       <!-- font -->
            
        <!-- Google Fonts (Roboto, modifiez selon vos besoins) -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">

        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

        <!-- SwiperJS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

        <!-- Animate.css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

        <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}"/>
    
        <!-- Favicon and Touch Icons  -->
        <link rel="shortcut icon" href="images/logo/favicon.png">
        <link rel="apple-touch-icon-precomposed" href="images/logo/favicon.png">
    
    </head>
    <body class="body">
        <!-- preload -->
         <div class="preload preload-container">
             <div class="preload-logo">
                 <div class="spinner"></div>
                 <span class="icon icon-villa-fill"></span>
             </div>
         </div>
         <!-- /preload -->
     
     
         <div id="wrapper">
             <div id="pagee" class="clearfix">
     
                <!-- Main Header -->
                <header id="header" class="main-header header-fixed fixed-header">
                    <!-- Header Lower -->
                    <div class="header-lower">
                        <div class="row">                      
                            <div class="col-lg-12">         
                                <div class="inner-header">
                                    <div class="inner-header-left">
                                        <div class="logo-box flex">
                                            <div class="logo"><a href="{{ route('welcome') }}"><img src="images/logo/logo@2x.png" alt="logo" width="166" height="48"></a></div>
                                        </div>
                                        <div class="nav-outer flex align-center">
                                            <!-- Main Menu -->
                                            <nav class="main-menu show navbar-expand-md">
                                                <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                                    <ul class="navigation clearfix">
                                                        <li><a href="{{ route('welcome') }}"></a></li>
                                                        {{-- <li><a href="{{ route('mypropertie.index') }}">My Properties</a></li> --}}
                                                    </ul>
                                                </div>
                                            </nav>
                                            <!-- Main Menu End-->
                                        </div>
                                    </div>
                                    <div class="inner-header-right header-account">

                                            @if (Route::has('login'))
                                                    @auth
                                                        <a
                                                            href="{{ url('/dashboard') }}"
                                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                                        >
                                                            Dashboard 
                                                        </a>
                                                    @else
                                                        <!-- <a
                                                            href="{{ route('login') }}"
                                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                                        >
                                                            Log in
                                                        </a> -->

                                                        <a href="{{ route('login') }}"  class="tf-btn btn-line btn-login">
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M13.1251 5C13.1251 5.8288 12.7959 6.62366 12.2099 7.20971C11.6238 7.79576 10.8289 8.125 10.0001 8.125C9.17134 8.125 8.37649 7.79576 7.79043 7.20971C7.20438 6.62366 6.87514 5.8288 6.87514 5C6.87514 4.1712 7.20438 3.37634 7.79043 2.79029C8.37649 2.20424 9.17134 1.875 10.0001 1.875C10.8289 1.875 11.6238 2.20424 12.2099 2.79029C12.7959 3.37634 13.1251 4.1712 13.1251 5ZM3.75098 16.765C3.77776 15.1253 4.44792 13.5618 5.61696 12.4117C6.78599 11.2616 8.36022 10.6171 10.0001 10.6171C11.6401 10.6171 13.2143 11.2616 14.3833 12.4117C15.5524 13.5618 16.2225 15.1253 16.2493 16.765C14.2888 17.664 12.1569 18.1279 10.0001 18.125C7.77014 18.125 5.65348 17.6383 3.75098 16.765Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                            Sign in  
                                                        </a>
                                        
                                                        @if (Route::has('register'))
                                                            <!-- <a
                                                                href="{{ route('register') }}"
                                                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                                            >
                                                                Register
                                                            </a> -->

                                                            {{-- <div class="flat-bt-top">
                                                                <a href="{{ route('register') }}" class="tf-btn btn-line btn-login">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M13.1251 5C13.1251 5.8288 12.7959 6.62366 12.2099 7.20971C11.6238 7.79576 10.8289 8.125 10.0001 8.125C9.17134 8.125 8.37649 7.79576 7.79043 7.20971C7.20438 6.62366 6.87514 5.8288 6.87514 5C6.87514 4.1712 7.20438 3.37634 7.79043 2.79029C8.37649 2.20424 9.17134 1.875 10.0001 1.875C10.8289 1.875 11.6238 2.20424 12.2099 2.79029C12.7959 3.37634 13.1251 4.1712 13.1251 5ZM3.75098 16.765C3.77776 15.1253 4.44792 13.5618 5.61696 12.4117C6.78599 11.2616 8.36022 10.6171 10.0001 10.6171C11.6401 10.6171 13.2143 11.2616 14.3833 12.4117C15.5524 13.5618 16.2225 15.1253 16.2493 16.765C14.2888 17.664 12.1569 18.1279 10.0001 18.125C7.77014 18.125 5.65348 17.6383 3.75098 16.765Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                    </svg>
                                                                    Sign up 
                                                                </a>
                                                            </div>   --}}

                                                        @endif
                                                    @endauth
                                            @endif

                                            
                                    </div>
                                        
                                    <div class="mobile-nav-toggler mobile-button"><span></span></div>
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Header Lower -->

                </header>
                <!-- End Main Header -->
                @yield('content')

                <!-- footer -->
                <footer class="footer">
                    <div class="bottom-footer">
                        <div class="container">
                        <div class="content-footer-bottom">
                            <div class="copyright">©2024 Homelengo. All Rights Reserved.</div>
                                
                            <ul class="menu-bottom">
                                <li><a href="our-service.html">Terms Of Services</a> </li>

                                <li><a href="pricing.html">Privacy Policy</a> </li>
                                <li><a href="contact.html">Cookie Policy</a> </li>

                            </ul>
                        </div>
                        </div>
                    </div>
                </footer>
                <!-- end footer -->
            </div>
            <!-- /#page -->

        </div>
    

        <!-- jQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

        <!-- SwiperJS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <!-- Nice Select -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>

        <!-- CountTo -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-countto/1.2.0/jquery.countTo.min.js"></script>

        <!-- Rangle Slider (NoUiSlider) -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.7.1/nouislider.min.js"></script>

        <!-- LazySizes -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js"></script>

        <!-- Typed.js (Alternative pour Animation Heading) -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>

        <!-- Vos scripts personnalisés (conservez-les en local si pas de CDN) -->
        <script src="{{ asset('js/carousel.js') }}"></script>
        <script src="{{ asset('js/plugin.js') }}"></script>
        <script src="{{ asset('js/shortcodes.js') }}"></script>
        <script src="{{ asset('js/animation_heading.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>

            
    </body>
</html>
