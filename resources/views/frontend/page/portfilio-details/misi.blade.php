@extends('frontend.layouts.single-master')

@section('content')

    
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">MISI Portfilio Details</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <!--<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>-->
                    <!--<li class="breadcrumb-item active" aria-current="page">MISI</li>-->
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
                            <img src="{{ asset('frontend/img/misi.jpg') }}" alt="img">
                </div>
                <div class="mt-5">
                    <div class="about-content pl-md-4 mt-5 mt-lg-0 mb-3">
                    <h3>MISI Project</h3>
                    <br><br>

                        <p class="about-us" >The Hospital Management project represents a comprehensive and integrated system aimed at optimizing the operations and enhancing the efficiency of healthcare facilities. It encompasses various modules and functionalities designed to streamline administrative tasks, improve patient care, and facilitate better decision-making for healthcare professionals.</p>
                        <p class="about-us">At its core, this project offers an advanced Electronic Health Record (EHR) system. This system efficiently manages and maintains patient records digitally, ensuring accessibility, accuracy, and security. It enables healthcare providers to access patient information instantly, including medical history, test results, prescribed medications, and treatment plans. This centralization of data eliminates the need for paper-based records, reducing errors and improving coordination among medical staff.</p>
                        <p class="about-us">Appointment scheduling and management are crucial components of this project. It provides a user-friendly interface for patients to schedule appointments online, check availability, and receive automated reminders. For healthcare providers, it offers a centralized calendar system, facilitating efficient scheduling of consultations, tests, and procedures while minimizing appointment conflicts.</p>
                        <p class="about-us">Furthermore, the Hospital Management project optimizes inventory and resource management. It includes modules for inventory tracking, ensuring adequate stock levels of medications, medical supplies, and equipment. Automated alerts for low inventory prevent shortages and streamline procurement processes. Additionally, it assists in managing hospital resources effectively, allocating staff, rooms, and equipment efficiently to maximize utilization.</p>
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