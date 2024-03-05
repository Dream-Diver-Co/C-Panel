@extends('frontend.layouts.single-master')

@section('content') 
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">Portfolio</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <!--<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>-->
                    <!--<li class="breadcrumb-item active" aria-current="page">Portfolio</li>-->
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
     <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6 mb-5">OUR PAST WORKS</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <a href="{{ route('frontend.portfolio.pos') }}">
                            <img class="img-fluid" src="{{ asset('frontend/img/POS.jpg') }}"  alt="{{ asset('frontend/img/POS.jpg') }}">
                            <div class="d-flex align-items-center bg-light">
                                <div class="service-icon flex-shrink-0 bg-primary">
                                    <img class="img-fluid" src="{{ asset('frontend/img/icon/icon-01-light.png') }}" alt="icon-01-light">
                                </div>
                                <a class="h4 mx-4 mb-0" href="{{ route('frontend.portfolio.pos') }}">POS</a>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <a href="{{ route('frontend.portfolio.aeon') }}">
                            <img class="img-fluid" src="{{ asset('frontend/img/aeon.jpg') }}"  alt="{{ asset('frontend/img/aeon.jpg') }}">
                            <div class="d-flex align-items-center bg-light">
                                <div class="service-icon flex-shrink-0 bg-primary">
                                    <img class="img-fluid" src="{{ asset('frontend/img/icon/icon-01-light.png') }}" alt="icon-01-light">
                                </div>
                                <a class="h4 mx-4 mb-0" href="{{ route('frontend.portfolio.aeon') }}">AEON</a>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                       <a href="{{ route('frontend.portfolio.misi') }}">
                            <img class="img-fluid" src="{{ asset('frontend/img/misi.jpg') }}"  alt="{{ asset('frontend/img/misi.jpg') }}">
                            <div class="d-flex align-items-center bg-light">
                                <div class="service-icon flex-shrink-0 bg-primary">
                                    <img class="img-fluid" src="{{ asset('frontend/img/icon/icon-01-light.png') }}" alt="icon-01-light">
                                </div>
                                <a class="h4 mx-4 mb-0" href="{{ route('frontend.portfolio.misi') }}">MISI</a>
                            </div>
                       </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                       <a href="{{ route('frontend.portfolio.shob-khobor') }}">
                            <img class="img-fluid" src="{{ asset('frontend/img/old_5151news.jpeg') }}"  alt="{{ asset('frontend/img/5151news.jpeg') }}">
                            <div class="d-flex align-items-center bg-light">
                                <div class="service-icon flex-shrink-0 bg-primary">
                                    <img class="img-fluid" src="{{ asset('frontend/img/icon/icon-01-light.png') }}" alt="icon-01-light">
                                </div>
                                <a class="h4 mx-4 mb-0" href="{{ route('frontend.portfolio.shob-khobor') }}">Shob Khobor</a>
                            </div>
                       </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <a href="{{ route('frontend.portfolio.stay-connected') }}">
                            <img class="img-fluid" src="{{ asset('frontend/img/old_8741stayconnected.jpeg') }}" alt="8741stayconnected">
                            <div class="d-flex align-items-center bg-light">
                                <div class="service-icon flex-shrink-0 bg-primary">
                                    <img class="img-fluid" src="{{ asset('frontend/img/icon/icon-02-light.png')}}" alt="icon-02-light">
                                </div>
                                <a class="h4 mx-4 mb-0" href="{{ route('frontend.portfolio.stay-connected') }}">FnF - Stay connected</a>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <a href="{{ route('frontend.portfolio.de-was') }}">
                            <img class="img-fluid" src="{{ asset('frontend/img/old_427laundry.jpeg') }}" alt="427laundry">
                            <div class="d-flex align-items-center bg-light">
                                <div class="service-icon flex-shrink-0 bg-primary">
                                    <img class="img-fluid" src="{{ asset('frontend/img/icon/icon-03-light.png') }}" alt="icon-03-light">
                                </div>
                                <a class="h4 mx-4 mb-0" href="{{ route('frontend.portfolio.de-was') }}">De-Was</a>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <a href="{{ route('frontend.portfolio.book-exchanger') }}">
                            <img class="img-fluid" src="{{ asset('frontend/img/4071book.jpg')}}" alt="4071book">
                            <div class="d-flex align-items-center bg-light">
                                <div class="service-icon flex-shrink-0 bg-primary">
                                    <img class="img-fluid" src="{{ asset('frontend/img/icon/icon-04-light.png')}}" alt="icon-04-light">
                                </div>
                                <a class="h4 mx-4 mb-0" href="{{ route('frontend.portfolio.book-exchanger') }}">Book Exchanger</a>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                       <a href="{{ route('frontend.portfolio.de-shopper') }}">
                            <img class="img-fluid" src="{{ asset('frontend/img/old_5595shop.jpeg')}}" alt="5595shop">
                            <div class="d-flex align-items-center bg-light">
                                <div class="service-icon flex-shrink-0 bg-primary">
                                    <img class="img-fluid" src="{{ asset('frontend/img/icon/icon-05-light.png')}}" alt="icon-05-light">
                                </div>
                                <a class="h4 mx-4 mb-0" href="{{ route('frontend.portfolio.de-shopper') }}">De-Shopper</a>
                            </div>
                       </a>
                    </div>
                </div>
                <!-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <img class="img-fluid" src="{{ asset('frontend/img/service-6.jpg')}}" alt="service-6">
                        <div class="d-flex align-items-center bg-light">
                            <div class="service-icon flex-shrink-0 bg-primary">
                                <img class="img-fluid" src="{{ asset('frontend/img/icon/icon-06-light.png')}}" alt="icon-06-light">
                            </div>
                            <a class="h4 mx-4 mb-0" href="">Digital Marketing</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection
