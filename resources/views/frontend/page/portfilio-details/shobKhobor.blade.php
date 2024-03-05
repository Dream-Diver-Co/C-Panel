@extends('frontend.layouts.single-master')

@section('content')

    
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">Shob Khobor Portfilio Details</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <!--<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>-->
                    <!--<li class="breadcrumb-item active" aria-current="page">Shob Khobor</li>-->
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
                            <img src="{{ asset('frontend/img/5151news.jpg') }}" alt="img">
                </div>
                <div class="mt-5">
                    <div class="about-content pl-md-4 mt-5 mt-lg-0 mb-3">
                    <h3>Shob Khobor/The Newser</h3>
                    <br><br>

                        <p class="about-us" >True to its name, “Shob Khobor” (English Meaning- Every news) is an advanced news portal that renders with information from all across the globe from trusted sources. With just one click you can keep yourself updated via e-papers, live TV channels, and news videos. It won’t be wrong to mention that it is a one-stop solution for your news feed. The responsive web design makes the app comfortable for both mobile and desktop reading. Thanks to our team for developing the app with a visual display that gives you the feel of reading a real newspaper. You keep yourself updated and it is free.</p>
                        <p class="about-us">Why choose our online news portal?</p>
                        <ul>
                            <li>Real-time news updates. Thanks to our team and our advanced AI algorithm targeting the right sources.</li>
                            <li>User-friendly UI makes it easy to read and comfortable for the eyes.</li>
                            <li>The news sources are verified, which makes us portal authentic.</li>
                            <li>Offline news reading is available after you get it updated while online.</li>
                            <li>News loading is fast and seamless.</li>
                            <li>Top news from Bangladesh and from around the world.</li>
                            <li>Get easy access to Zoom In and Zoom Out functionalities.</li>
                            <li>The app is available in Play Store and iOS Store free of cost.</li>
                        </ul>
                    </div>    
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    



@endsection