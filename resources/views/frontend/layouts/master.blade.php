<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Best IT Solution organization in Rotterdam, Netherlands - Dream Diver</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="keywords" content="DreamDiver-Dream Diver IT Solutions, Web Development, Software Development, Web Application Website, Android app, iOS app, SEO, ICT, IT">
    <meta name="description" content="Dream Diver provides the best IT solutions in Rotterdam, Netherlands, offering services - web base software design, development, SEO and IT services.">
     <!-- Facebook Open Graph Tags -->
    <meta property='og:site_name' content='Dream Diver'>
    <meta property='og:title' content='Best IT Solution organization in Rotterdam, Netherlands - Dream Diver'>
    <meta property='og:description' content='Dream Diver provides the best IT solutions in Rotterdam, Netherlands, offering services - web base software design, development, SEO and IT services.'>
    <meta property='og:image' content='https://dreamdiver.nl/backend/img/logo/j7J4UINbDY8B.png'>
    <meta property='og:url' content='https://dreamdiver.nl/'>
    <meta property='og:type' content='Best IT Solution organization in Rotterdam, Netherlands - Dream Diver'>
    <link rel="shortcut icon" href="https://dreamdiver.nl/frontend/img/favicon.png" />
    <!-- canonical -->
    <link rel="canonical" href="https://dreamdiver.nl"/>

    <!-- Favicon -->
    <link href="{{ asset('frontend') }}/img/favicon.png" rel="icon">
    


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;600;800&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 
   
    <!-- Icon Font Stylesheet -->
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('frontend') }}/css/whatsapp.css" rel="stylesheet">
    
     <!-- ckeditor -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.23.0/ckeditor.js" integrity="sha512-7tXDCaWDbkhXMuB8meqHJJySRtqB4QvPS84FMnnh5vlyRiNsrIne8xwME0RQNrg4f+7CZPOAc7tXNtWgdHdCng==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     
         <!-- Arif add css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;600;800&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lumier:wght@300&display=swap" />
    
    <!-- Libraries Stylesheet -->
    <link href="{{ asset('frontend') }}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('frontend') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('frontend') }}/css/style.css" rel="stylesheet">
    
    <!-- schema.org data structure -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "WebSite",
      "name": "dreamdiver",
      "url": "https://dreamdiver.nl/",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://dreamdiver.nl/{search_term_string}about-us",
        "query-input": "required name=search_term_string"
      }
    }
    </script>
    
    <!-- google search-console -->
    <meta name="google-site-verification" content="m03QEf9JLu4KZDrFdygF5CveMSxZvK3XsBkO8_FSDvs" />
    
    <!-- Google tag (gtag.js) Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-NV7P9LZQG8"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-NV7P9LZQG8');
        </script>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->



    @include('frontend.partials.header')

    @include('frontend.partials.sidebar')



    <!-- Carousel Start -->
    @include('frontend.partials.slider')
    <!-- Carousel End -->

      @yield('content')  

    <!-- Footer Start -->
    @include('frontend.partials.footer')
    <!-- Footer End -->

   
   <a href="https://web.whatsapp.com/send?phone=+31644215009text=Hi,%20How%20can%20i%20help%20you?"  target="_blank" class="whatsapp_float"><i class="fa-brands fa-whatsapp whatsapp-icon"></i></a>
   
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- Arif add js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/lib/wow/wow.min.js"></script>
    <script src="{{ asset('frontend') }}/lib/easing/easing.min.js"></script>
    <script src="{{ asset('frontend') }}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{ asset('frontend') }}/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{ asset('frontend') }}/lib/counterup/counterup.min.js"></script>
    <script src="{{ asset('frontend') }}/lib/parallax/parallax.min.js"></script>
    


    <!-- Template Javascript -->
    <script src="{{ asset('frontend') }}/js/main.js"></script>
   
    <!-- ckeditor script-->
    <script>
        $(document).ready(functrion(){
         CKEDITOR.replace('texteditor',{
           height: 360,
           })
         });
      </script>

      <script>
          setCookie = (cName, cValue, expDays) => {
          let date = new Date();
          date.setTime(date.getTime() + (expDays * 24 * 60 * 60 * 1000));
          const expires = "expires=" + date.toUTCString();
          document.cookie = cName + "=" + cValue + ";" + expires + "; path=/";
        } 

        getCookie = (cName) => {
        const name = cName + "=";
        const cDecoded = decodeURIComponent(document.cookie);
        const cArr = cDecoded.split("; ");
        let value;
        cArr.forEach(val => {
          if(val.indexOf(name) === 0) value = val.substring(name.length);
        })
        
        return value;
        }

        document.querySelector("#cookies-btn").addEventListener("click", () => {
          document.querySelector("#cookies").style.display = "none";
          setCookies("cookies", true, 30);	
        })

        cookieMessage = () => {
        if(!getCookie("cookie"))
          document.querySelector("#cookies").style.display = "block";
        }

        window.addEventListener("load", cookieMessage);


      </script>
</body>

</html>