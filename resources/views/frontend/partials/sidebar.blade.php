
 <!-- Navbar Start -->
 <?php $setting = App\Models\backend\Setting::find(1); ?>
 <!-- @php $slider = App\Models\Slider::find(1); @endphp -->
 <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
    <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center">
        <h1 class="m-0"><img class="img-fluid me-3" src="{{ asset('backend/img/logo/'.$setting->header_logo ) }}" alt="logo" alt="">{{ $setting->site_name }}</h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto bg-light pe-4 py-3 py-lg-0">
            <a href="{{ url('/') }}" class="nav-item nav-link {{Request::is('/') ? 'active':''}}">Home</a>
            <a href="{{ route('frontend.about-us') }}" class="nav-item nav-link {{Request::is('about-us') ? 'active':''}}">About Us</a>
            <a href="{{ route('frontend.our-service') }}" class="nav-item nav-link {{Request::is('our-service') ? 'active':''}}">Our Services</a>
            <a href="{{ route('frontend.portfolio') }}" class="nav-item nav-link {{Request::is('portfolio') ? 'active':''}}">Portfolio</a>
            {{-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu bg-light border-0 m-0">
                    <a href="feature.html" class="dropdown-item">Features</a>
                    <a href="quote.html" class="dropdown-item">Free Quote</a>
                    <a href="team.html" class="dropdown-item">Our Team</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    <a href="404.html" class="dropdown-item">404 Page</a>
                </div>
            </div> --}}
            <a href="{{route('frontend.contact-us')}}" class="nav-item nav-link {{Request::is('contact-us') ? 'active':''}}">Contact Us</a>
        </div>
         <div class="h-100 d-lg-inline-flex align-items-center d-none">
             <a  href="https://www.facebook.com/dreamdivernl" target="_blank" class="btn btn-square rounded-circle bg-light1 text-primary1 me-2" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
            <!--<a class="btn btn-square rounded-circle bg-light text-primary me-2" href="{{ $setting->facebook }}"><i class="fab fa-facebook-f"></i></a>-->
            <a href="https://twitter.com/home?logout=1701946567424" target="_blank" class="btn btn-square rounded-circle bg-light2 text-primary2 me-2" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="{{ $setting->linkedin }}" target="_blank" class="btn btn-square rounded-circle bg-light3 text-primary3 me-2" aria-label="Linkedin"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://www.instagram.com/dream_diver1/?hl=en" target="_blank" class="btn btn-square rounded-circle bg-light4 text-primary4 me-0" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</nav>
<!-- Navbar End -->