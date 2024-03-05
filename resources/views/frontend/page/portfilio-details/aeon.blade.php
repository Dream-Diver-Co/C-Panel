@extends('frontend.layouts.single-master')

@section('content')

    
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">AEON Portfilio Details</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <!--<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>-->
                    <!--<li class="breadcrumb-item active" aria-current="page">AEON</li>-->
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
                            <img src="{{ asset('frontend/img/aeon.jpg') }}" alt="img">
                </div>
                <div class="mt-5">
                    <div class="about-content pl-md-4 mt-5 mt-lg-0 mb-3">
                    <h3>AEON ERP Project</h3>
                    <br><br>

                        <p class="about-us" >Gurmans ERP stands as a cutting-edge Enterprise Resource Planning (ERP) solution, catering to diverse business needs across various industries. This robust system integrates multiple functions and processes into a unified platform, revolutionizing how companies manage and streamline their operations.</p>
                        <p class="about-us">Gurmans ERP provides a comprehensive suite of tools designed to optimize key business areas. Its modules encompass finance, inventory management, human resources, production, sales, and customer relationship management. By seamlessly integrating these functions, Gurmans ERP ensures data consistency, eliminates silos, and fosters cross-departmental collaboration.</p>
                        <p class="about-us">One of its primary strengths lies in inventory management. The system offers real-time tracking of stock levels, enabling businesses to efficiently monitor inventory across multiple locations. Automated alerts for low stock and forecasting tools aid in inventory optimization, reducing holding costs and preventing stockouts. Such precision in inventory management enhances supply chain efficiency and customer satisfaction.</p>
                        <p class="about-us">Financial management within Gurmans ERP streamlines accounting processes. It facilitates the generation of accurate financial reports, tracks expenses, manages payables and receivables, and automates billing cycles. This functionality ensures compliance with accounting standards while enabling informed financial decision-making.</p>
                        <!--<ul>-->
                        <!--    <li>Real-time news updates. Thanks to our team and our advanced AI algorithm targeting the right sources.</li>-->
                        <!--    <li>User-friendly UI makes it easy to read and comfortable for the eyes.</li>-->
                        <!--    <li>The news sources are verified, which makes us portal authentic.</li>-->
                        <!--    <li>Offline news reading is available after you get it updated while online.</li>-->
                        <!--    <li>News loading is fast and seamless.</li>-->
                        <!--    <li>Top news from Bangladesh and from around the world.</li>-->
                        <!--    <li>Get easy access to Zoom In and Zoom Out functionalities.</li>-->
                        <!--    <li>The app is available in Play Store and iOS Store free of cost.</li>-->
                        <!--</ul>-->
                    </div>    
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    



@endsection