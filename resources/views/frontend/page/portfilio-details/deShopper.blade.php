@extends('frontend.layouts.single-master')

@section('content')

    
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">De-Shopper Portfilio Details</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <!--<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>-->
                    <!--<li class="breadcrumb-item active" aria-current="page">De-Shopper</li>-->
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
                            <img src="{{ asset('frontend/img/5595shop.jpg') }}" alt="5595shop">
                </div>
                <div class="mt-5">
                    <div class="about-content pl-md-4 mt-5 mt-lg-0 mb-3">
                    <h3>De-Shopper</h3>
                    <br><br>

                    <p>Handpick the freshest fruits and vegetables, pulses and grains, dairy products, pet supplies, and hunting equipment, along with thousands of products from the supermarkets and shops of your choice. Choosing products and buying them from your preferred shops is what makes De-Shopper unique from the rest of the grocery apps functioning in the country at present. Furthermore, we assure you to deliver your products in the given address within two hours of the order. Online grocery shopping along with buying pet supplies and hunting equipment has never been so easy. We are the one-stop solution for everything you want for your daily needs.&nbsp;</p>
                    <p>How does it work?</p>
                    <ul>
                        <li>Log in to the app</li>
                        <li>Browse the items you want</li>
                        <li>Browse the stores/supermarkets from where you want to order</li>
                        <li>Add items to your shopping basket</li>
                        <li>Choose your preferred mode of payment</li>
                        <li>The products will be home-delivered or wherever you want within two hours of ordering</li>
                   </ul>
                </div>    
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    



@endsection