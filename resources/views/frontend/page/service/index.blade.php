@extends('frontend.layouts.single-master')

@section('content') 
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">Our Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <!--<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>-->
                    <!--<li class="breadcrumb-item active" aria-current="page">Our Services</li>-->
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6 mb-5">We Provide professional IT, Software Development & Services</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                       <a href="{{ route('frontend.our-service.software-development')}}">
                            <img class="img-fluid" src="{{ asset('frontend/img/service-1.png') }}"  alt="{{ asset('frontend/img/service-1.png') }}">
                            <div class="d-flex align-items-center">
                                <div class="service-icon flex-shrink-0 bg-primary">
                                    <img class="img-fluid" src="{{ asset('frontend/img/icon/icon-01-light.png') }}" alt="icon-01-light">
                                </div>
                                <a class="h4 mx-4 mb-0" href="{{ route('frontend.our-service.software-development')}}">Software Development</a>
                            </div>
                       </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <a href="{{ route('frontend.our-service.mobile-development')}}">
                            <img class="img-fluid" src="{{ asset('frontend/img/service-2.png') }}" alt="service-2">
                            <div class="d-flex align-items-center">
                                <div class="service-icon flex-shrink-0 bg-primary">
                                    <img class="img-fluid" src="{{ asset('frontend/img/icon/icon-02-light.png')}}" alt="icon-02-light">
                                </div>
                                <a class="h4 mx-4 mb-0" href="{{ route('frontend.our-service.mobile-development')}}">Mobile App Development</a>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <a href="{{ route('frontend.our-service.software-services')}}">
                            <img class="img-fluid" src="{{ asset('frontend/img/service-3.png') }}" alt="service-3">
                            <div class="d-flex align-items-center">
                                <div class="service-icon flex-shrink-0 bg-primary">
                                    <img class="img-fluid" src="{{ asset('frontend/img/icon/icon-03-light.png') }}" alt="icon-03-light">
                                </div>
                                <a class="h4 mx-4 mb-0" href="{{ route('frontend.our-service.software-services')}}">Softerware Services</a>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <a href="{{ route('frontend.our-service.webdesign-development')}}">
                            <img class="img-fluid" src="{{ asset('frontend/img/service-4.jpg')}}" alt="service-4">
                            <div class="d-flex align-items-center">
                                <div class="service-icon flex-shrink-0 bg-primary">
                                    <img class="img-fluid" src="{{ asset('frontend/img/icon/icon-04-light.png')}}" alt="icon-04-light">
                                </div>
                                <a class="h4 mx-4 mb-0" href="{{ route('frontend.our-service.webdesign-development')}}">Web Design & Development</a>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <a href="{{ route('frontend.our-service.search-engine-optimization') }}">
                            <img class="img-fluid" src="{{ asset('frontend/img/service-5.jpg')}}" alt="service-5">
                            <div class="d-flex align-items-center">
                                <div class="service-icon flex-shrink-0 bg-primary">
                                    <img class="img-fluid" src="{{ asset('frontend/img/icon/icon-05-light.png')}}" alt="icon-05-light">
                                </div>
                                <a class="h4 mx-4 mb-0" href="{{ route('frontend.our-service.search-engine-optimization') }}">Search Engine Optimization(SEO).</a>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <a href="{{ route('frontend.our-service.digital-marketing')}}">
                            <img class="img-fluid" src="{{ asset('frontend/img/service-6.jpg')}}" alt="service-6">
                            <div class="d-flex align-items-center">
                                <div class="service-icon flex-shrink-0 bg-primary">
                                    <img class="img-fluid" src="{{ asset('frontend/img/icon/icon-06-light.png')}}" alt="icon-06-light">
                                </div>
                                <a class="h4 mx-4 mb-0" href="{{ route('frontend.our-service.digital-marketing')}}">Digital Marketing</a>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection
