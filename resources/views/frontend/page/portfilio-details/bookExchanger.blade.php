@extends('frontend.layouts.single-master')

@section('content')

    
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">Book Exchanger Portfilio Details</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <!--<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>-->
                    <!--<li class="breadcrumb-item active" aria-current="page">Book Exchanger</li>-->
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
                            <img src="{{ asset('frontend/img/4071book.jpg') }}" alt="4071book">
                </div>
                <div class="mt-5">
                    <div class="about-content pl-md-4 mt-5 mt-lg-0 mb-3">
                    <h3>Book Exchanger</h3>
                    <br><br>

                    <p>Do you have stacks of books piling up in your cupboard and taking up too much space? Why don’t you try out Book Exchanger that helps you to exchange books with nearby people and encourage a community of readers? If you are someone who believes in the sharing of books, you will love Book Exchanger-an app that connects bibliophiles in the locality/region and help the exchange of books at a budget-friendly rate. You can also get it for free in exchange for another book.</p>                    
                    <p>This is how it works:</p>
                    <ul>
                        <li>You log onto the app</li>
                        <li>Scan the book’s barcode, and the details like a book cover, publishing date, the summary automatically get uploaded.</li>
                        <li>Once this is done, your book is visible to other users in your vicinity for book trading. Similarly, you can also check the book listing of others.</li>
                        <li>The users can send messages to the book owners, arrange for exchanging books, or even buying when you have nothing to offer.</li>            
                        
                    </ul>
                </div>    
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    



@endsection