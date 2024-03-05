<div id="cookies">
  <div class="container">
    <div class="subcontainer">
      <div class="cookies">
        <p>This website uses cookies to ensure you get the best experience on our website.<a href="">More info.</a></p>
         <button id= "cookies-btn">Accept!</button> 
       </div>
     </div>
  
  </div>
</div>




<?php $setting = App\Models\backend\Setting::find(1); ?>
<div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s" style="background-color: #3a3f5a !important;">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-12">
                <h1 class="text-white mb-4"><img class="img-fluid me-3" src="{{ asset('backend/img/logo/'.$setting->header_logo ) }}" alt="logo" width="50">{{ $setting->site_name }}</h1>
                {{-- <span>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit.</span> --}}
            </div>
            <!-- <div class="col-md-6">
                <h5 class="text-light mb-4">Newsletter</h5>
                <p>Clita erat ipsum et lorem et sit, sed stet lorem sit clita.</p>
                <div class="position-relative">
                    <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                    <button type="button" class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                </div>
            </div> -->
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Get In Touch</h5>
                <p><i class="fa fa-map-marker-alt me-3"></i>{{ $setting->address }}</p>
                <a href="tel:+31644215009" style="color: #7A8499;"><i class="fa fa-phone-alt me-3"></i>{{ $setting->mobile }}</a><br>
                <a href="mailto:info@dreamdiver.nl" style="color: #7A8499;"><i class="fa fa-envelope me-3"></i>{{ $setting->email }}</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Our Services</h5>
                <a class="btn btn-link" href="{{ route('frontend.our-service.software-development')}}">Software Development</a>
                <a class="btn btn-link" href="{{ route('frontend.our-service.mobile-development')}}">Mobile App Development</a>
                <a class="btn btn-link" href="{{ route('frontend.our-service.software-services')}}">Softerware Services</a>
                <a class="btn btn-link" href="{{ route('frontend.our-service.webdesign-development')}}">Web Design & Development</a>
                <a class="btn btn-link" href="{{ route('frontend.our-service.search-engine-optimization')}}">Search Engine Optimization</a>
                <a class="btn btn-link" href="{{ route('frontend.our-service.digital-marketing')}}">Digital Marketing</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Quick Links</h5>
                <a class="btn btn-link" href="{{ route('frontend.about-us') }}">About Us</a>
                <a class="btn btn-link" href="{{ route('frontend.contact-us') }}">Contact Us</a>
                <a class="btn btn-link" href="{{ route('frontend.our-service') }}">Our Services</a>
                <a class="btn btn-link" href="{{ route('frontend.terms-conditions') }}">Terms & Condition</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Follow Us</h5>
                <div class="d-flex">
                    <a href="https://www.facebook.com/dreamdivernl" target="_blank" class="btn btn-square rounded-circle bg-light1 text-primary1 me-1" aria-label="facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/home?logout=1701946567424" target="_blank" class="btn btn-square rounded-circle bg-light2 text-primary2 me-1" aria-label="x-twitter"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#" target="_blank" class="btn btn-square rounded-circle bg-light3 text-primary3 me-1"  aria-label="linkedin-in"><i class="fab fa-linkedin-in"></i></a>
                   <a href="https://www.instagram.com/dream_diver1/?hl=en" target="_blank" class="btn btn-square rounded-circle bg-light4 text-primary4 me-0" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>


    <div class="container py-5 copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; 2023, Dream Diver IT Solutions. All Rights Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Developed By <a href="https://dreamdiver.nl">Dream Diver</a> 
                </div>
            </div>
        </div>
    </div>
</div>
