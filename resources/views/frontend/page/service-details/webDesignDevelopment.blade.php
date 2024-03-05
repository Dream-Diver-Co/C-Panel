@extends('frontend.layouts.single-master')

@section('content')

    
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">Web Design & Development</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <!--<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>-->
                    <!--<li class="breadcrumb-item active" aria-current="page">Web Design & Development</li>-->
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
                            <img class="img-fluid" src="{{ asset('frontend/img/webdesign-development.jpg') }}" alt="webdesign_development">
                </div>
                <div class="mt-5">
                    <div class="about-content pl-md-4 mt-5 mt-lg-0 mb-3">
                    <h3>Web Design & Development</h3>
                    <br><br>

                    <p>Web design and web development are two closely related but distinct disciplines that work together to create and maintain websites. Here's an overview of each:</p>                    
                    <p>1. Web Design:</p>
                    <ul>
                        <li>Web design primarily focuses on the visual and user interface aspects of a website. Designers are responsible for creating the look and feel of a website, ensuring it is visually appealing and user-friendly.</li>
                        <li>Key aspects of web design include layout, color schemes, typography, images, icons, and overall aesthetics.</li>
                        <li>Web designers often use design software like Adobe Photoshop, Sketch, or Figma to create mockups and wireframes.</li>
                        <li>User experience (UX) design is an important part of web design, involving the creation of an intuitive and engaging user journey.</li>            
                    </ul>
                    <p>2. Web Development:</p>
                    <ul>
                        <li>Web development, on the other hand, deals with the technical and functional aspects of a website. Developers are responsible for turning the design into a fully functioning website by writing code.</li>
                        <li>There are three main components of web development:</li>
                        <p>a. Front-end development: This involves coding the client-side of a website, which is what users interact with in their web browsers. Front-end developers work with HTML, CSS, and JavaScript to create interactive and responsive web pages.</p>
                        <p>b. Back-end development: Back-end developers work on the server-side of a website, managing databases, server configurations, and application logic. They use programming languages such as Python, Ruby, PHP, or Node.js to build server-side functionality.</p>
                        <p>c. Full-stack development: Full-stack developers are proficient in both front-end and back-end development and can work on all aspects of a web project.</p>
                    </ul>
                    <p>3. Collaboration:</p>
                    <ul>
                        <li>In practice, web design and web development often overlap and require close collaboration. Designers and developers work together to ensure that the visual design aligns with the technical implementation.</li>
                        <li>Communication and coordination between these two roles are essential to create a successful website.</li>
                    </ul>
                    <p>4. Responsive Design:</p>
                    <ul>
                        <li>With the increasing use of mobile devices, responsive web design has become crucial. This involves designing and developing websites that adapt to different screen sizes and devices to provide a consistent and user-friendly experience.</li>
                    </ul>
                    <p>5. Content Management Systems (CMS):</p>
                    <ul>
                        <li>Many websites are built using content management systems like WordPress, Joomla, or Drupal, which simplify both the design and development processes. CMS platforms allow users to update content without extensive coding knowledge.</li>
                    </ul>
                    <p>6. Web Technologies:</p>
                    <ul>
                        <li>The web development landscape is constantly evolving, and developers use various technologies and frameworks. Some popular technologies and tools include HTML5, CSS3, JavaScript, Bootstrap, React, Angular, and Vue.js.</li>
                    </ul>
                </div>    
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    



@endsection