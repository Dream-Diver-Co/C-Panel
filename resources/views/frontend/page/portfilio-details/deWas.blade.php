@extends('frontend.layouts.single-master')

@section('content')

    
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">De-Was Portfilio Details</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <!--<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>-->
                    <!--<li class="breadcrumb-item active" aria-current="page">De-Was</li>-->
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row">
               <div class="about-thumb text-center">
                            <img src="{{ asset('frontend/img/427laundry.jpg') }}" alt="427laundry">
                </div>
                <div class="mt-5">
                    <div class="about-content pl-md-4 mt-5 mt-lg-0 mb-3">
                    <h3>De-Was</h3>
                    <br><br>

                    <p>You simply need to place an order on our De-Was mobile app, and we will do the rest. We wash, dry, and iron your clothes with utmost care. You just have to ask for the service you require. De-Was is a professional, digital laundry app that picks up and delivers your laundry, everything from socks, to dry cleaning at your doorsteps without hassles. We can be your rescue to every laundry needs and you can indulge in the things you love.</p>
                    <p>This is how De-Was works:</p>

                    <ul>
                        <li>You log in</li>
                        <li>A free pick-up</li>
                        <li>Wash and Dry; Fold and Iron</li>
                        <li>Free delivery</li>
                    </ul>
                </div>    
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    



@endsection