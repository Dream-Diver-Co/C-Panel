@extends('frontend.layouts.single-master')

@section('content')

    
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">FnF - Stay Connected Portfilio Details</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <!--<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>-->
                    <!--<li class="breadcrumb-item active" aria-current="page">FnF - Stay Connected</li>-->
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
                            <img src="{{ asset('frontend/img/8741stayconnected.jpg') }}" alt="img">
                </div>
                <div class="mt-5">
                    <div class="about-content pl-md-4 mt-5 mt-lg-0 mb-3">
                    <h3>FnF - Stay Connected</h3>
                    <br><br>

                    <p>Connect with your College/University/Organisation Alumni network with FnF. FnF, the Friend and Family app is a one-stop solution for all your alumni networking requirements. The app has been designed for college/university alumni as well as for small business/office in order to come up with their own categorized groups. Currently, there are several alumni groups in the market, but the information is not classified properly. FnF aims to help the users to form alumni groups with more diversified options. This will aid the users with the right person at the right place in real-time.</p>
                    </div>    
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    



@endsection