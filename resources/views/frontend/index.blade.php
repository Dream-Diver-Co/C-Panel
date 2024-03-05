@extends('frontend.layouts.master')

@section('content')
<?php $setting = App\Models\backend\Setting::find(1); ?>
{{-- Arif Starts --}}
<section id="Service" class="what-we-offer">
    <div class="container">
        <h1>Welcome To The Best Software Firms & IT Service Center</h1>
        <div class="service-container grid">
            <div class="service">
                <div class="card">
                    <i class="fas fa-tools"></i>
                    <h3>Expert Technician</h3>
                    <p>Elite technical expertise for seamless problem-solving and innovation.</p>
                </div>
            </div>


            <div class="service">
                <div class="card">
                    <i class="fas fa-laptop-code"></i>
                    <h3>Web Design</h3>
                    <p>Striking web designs for a standout online presence.</p>
                </div>
            </div>

            <div class="service">
                <div class="card">
                    <i class="fas fa-trophy"></i>
                    <h3>Best Quality</h3>
                    <p>LExceptional services tailored for your success and satisfaction.</p>
                </div>
            </div>

            <div class="service">
                <div class="card">
                    <i class="fas fa-cash-register"></i>
                    <h3>POS System</h3>
                    <p>Efficient POS systems for streamlined transactions and business excellence.</p>
                </div>
            </div>

            <div class="service">
                <div class="card">
                    <i class="fas fa-mobile-alt"></i>
                    <h3>Mobile Application</h3>
                    <p>Sophisticated Mobile App for great user experiences and business success.</p>
                </div>
            </div>

            <div class="service">
                <div class="card">
                    <i class="fas fa-search"></i>
                    <h3>SEO</h3>
                    <p>Strategic SEO solutions for enhanced online visibility and business growth.</p>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Arif Ends --}}


 <!-- Features Start -->
    <!--<div class="container-xxl py-5">-->
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-5">Few Reasons Why People Choosing Us!</h1>
                    <p class="mb-5">Our IT Service Center stands out for several compelling reasons, making it the preferred choice for individuals and businesses alike. Firstly, our unwavering commitment to customer satisfaction sets us apart. </p>
                    <div class="d-flex mb-5">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle" style="width: 90px; height: 90px;">
                            <img class="img-fluid" src="{{ asset('frontend') }}/img/icon/icon-08-light.png" alt="icon-08-light">
                        </div>
                        <div class="ms-4">
                            <h5 class="mb-3">Trusted Service Center</h5>
                            <span>Welcome to our trusted service center, where reliability meets excellence. Clients choose us with confidence for several compelling reasons.</span>
                        </div>
                    </div>
                    <div class="d-flex mb-5">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle" style="width: 90px; height: 90px;">
                            <img class="img-fluid" src="{{ asset('frontend') }}/img/icon/icon-10-light.png" alt="icon-10-light">
                        </div>
                        <div class="ms-4">
                            <h5 class="mb-3">Reasonable Price</h5>
                            <span>At our service center, we take pride in offering top-notch solutions at a reasonable price.</span>
                        </div>
                    </div>
                    <div class="d-flex mb-0">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle" style="width: 90px; height: 90px;">
                            <img class="img-fluid" src="{{ asset('frontend') }}/img/icon/icon-06-light.png" alt="icon-06-light">
                        </div>
                        <div class="ms-4">
                            <h5 class="mb-3">24/7 Supports</h5>
                            <span>Our 24/7 support is designed with your convenience in mind, providing peace of mind and minimizing downtime.</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative rounded overflow-hidden h-100" style="min-height: 400px;">
                        <img class="img-fluid" class="position-absolute w-100 h-100" src="{{ asset('frontend') }}/img/feature.jpg" alt="feature-image" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    <!--</div>-->
    <!-- Features End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="display-6 mb-5">We Provide professional IT, Software Development & Services</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <a href="{{ route('frontend.our-service.software-development')}}">
                            <img class="img-fluid" src="{{ asset('frontend/img/service-1-n.jpg') }}" alt="service-1-n">
                            <div class="d-flex align-items-center">
                                <div class="service-icon flex-shrink-0 bg-primary">
                                    <img class="img-fluid" src="{{ asset('frontend/img/icon/icon-01-light.png') }}" alt="icon-01-light">
                                </div>
                                <a class="h4 mx-4 mb-0" href="{{ route('frontend.our-service.software-development')}}">Software Development</a>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <a href="{{ route('frontend.our-service.mobile-development')}}">
                            <img class="img-fluid" src="{{ asset('frontend/img/service-2-n.jpg') }}" alt="service-2">
                            <div class="d-flex align-items-center">
                                <div class="service-icon flex-shrink-0 bg-primary">
                                    <img class="img-fluid" src="{{ asset('frontend/img/icon/icon-02-light.png')}}" alt="icon-02-light">
                                </div>
                                <a class="h4 mx-4 mb-0" href="{{ route('frontend.our-service.mobile-development')}}">Mobile App Development</a>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <a href="{{ route('frontend.our-service.software-services')}}">
                            <img class="img-fluid" src="{{ asset('frontend/img/service-3-n.jpg') }}" alt="service-3">
                            <div class="d-flex align-items-center">
                                <div class="service-icon flex-shrink-0 bg-primary">
                                    <img class="img-fluid" src="{{ asset('frontend/img/icon/icon-03-light.png') }}" alt="service-3">
                                </div>
                                <a class="h4 mx-4 mb-0" href="{{ route('frontend.our-service.software-services')}}">Software Services</a>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="{{ route('frontend.our-service.webdesign-development')}}">
                        <div class="service-item">
                            <img class="img-fluid" src="{{ asset('frontend') }}/img/service-4-n.jpg" alt="service-4">
                            <div class="d-flex align-items-center">
                                <div class="service-icon flex-shrink-0 bg-primary">
                                    <img class="img-fluid" src="{{ asset('frontend') }}/img/icon/icon-04-light.png" alt="service-04">
                                </div>
                                <a class="h4 mx-4 mb-0" href="{{ route('frontend.our-service.webdesign-development')}}">Web Design & Development</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                    <a href="{{ route('frontend.our-service.search-engine-optimization') }}">
                        <div class="service-item">
                            <img class="img-fluid" src="{{ asset('frontend') }}/img/service-5-n.jpg" alt="service-5">
                            <div class="d-flex align-items-center">
                                <div class="service-icon flex-shrink-0 bg-primary">
                                    <img class="img-fluid" src="{{ asset('frontend') }}/img/icon/icon-05-light.png" alt="icon-05-light">
                                </div>
                                <a class="h4 mx-4 mb-0" href="{{ route('frontend.our-service.search-engine-optimization') }}">Search Engine Optimization(SEO).</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                    <a href="{{ route('frontend.our-service.digital-marketing')}}">
                        <div class="service-item">
                            <img class="img-fluid" src="{{ asset('frontend') }}/img/service-6-n.jpg" alt="service-6">
                            <div class="d-flex align-items-center">
                                <div class="service-icon flex-shrink-0 bg-primary">
                                    <img class="img-fluid" src="{{ asset('frontend') }}/img/icon/icon-06-light.png" alt="icon-06-light">
                                </div>
                                <a class="h4 mx-4 mb-0" href="{{ route('frontend.our-service.digital-marketing')}}">Digital Marketing</a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


   @endsection