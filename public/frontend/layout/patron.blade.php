<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title');</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('') }}assets/img/favicon.png" rel="icon">
  <link href="{{ asset('') }}assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('') }}assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('') }}assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('') }}assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="{{ asset('') }}assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('') }}assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="{{ asset('') }}assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('') }}assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Logis - v1.0.1
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
   @include('header.blade.php');
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
@yield('content');
<!-- End Hero Section -->

 

    <!-- ======= Featured Services Section ======= -->
  

        

      
          <!-- End Service Item -->
          <!-- End Service Item -->

           <!-- End Service Item -->

       
     <!-- End Featured Services Section -->

    <!-- ======= About Us Section ======= -->

   <!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
     <!-- End Card Item -->

         <!-- End Card Item -->

         <!-- End Card Item -->
         <!-- End Card Item -->

          <!-- End Card Item -->
          <!-- End Card Item -->

        <!-- End Services Section -->

    <!-- ======= Call To Action Section ======= -->
   <!-- End Call To Action Section -->

    <!-- ======= Features Section ======= -->
    <!-- Features Item -->
    <!-- Features Item -->
 <!-- Features Item -->
 <!-- Features Item -->
  <!-- End Features Section -->

    <!-- ======= Pricing Section ======= -->
    <!-- End Pricing Item -->

          <!-- End Pricing Item -->

          <!-- End Pricing Item -->
         <!-- End Pricing Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- End testimonial item -->

            <!-- End testimonial item -->
 <!-- End testimonial item -->

           <!-- End testimonial item -->

          <!-- End testimonial item -->

     <!-- End Testimonials Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
     <!-- # Faq item-->

              <!-- # Faq item-->

             <!-- # Faq item-->

             <!-- # Faq item-->

              <!-- # Faq item-->

            <!-- End Frequently Asked Questions Section -->
  <!-- ======= Footer ======= -->
    @include('footer.blade.php');
  <!-- End Footer -->
  <!-- End #main -->
  </main><!-- End #main -->


  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('') }}assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('') }}assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{ asset('') }}assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('') }}assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('') }}assets/vendor/aos/aos.js"></script>
  <script src="{{ asset('') }}assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('') }}assets/js/main.js"></script>

</body>

</html>