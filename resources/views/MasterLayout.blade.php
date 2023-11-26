<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Steller landing page.">
    <meta name="author" content="Devcrud">
    <title>Dibbo Saha</title>
    <!-- font icons -->
    
    <link rel="stylesheet" href="{{ asset('assets/vendors/themify-icons/css/themify-icons.css') }}">
    <!-- Bootstrap + Steller main styles -->
    
	<link rel="stylesheet" href="{{ asset('assets/css/steller.css') }}">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Page navigation -->
    {{-- @yield('nav') --}}
    @include('layout.navbar')
    <!-- End of page navibation -->

    <!-- Page Header -->
    @yield('pageheader')
    
    <!-- End of Page Header -->
    
    <!-- About section -->
    @yield('aboutsection')
    

    <!-- Service section -->

    @yield('servicesection')
    
    <!-- End of Sectoin -->

    <!-- Skills section -->
    @yield('skillssection')
   
    <!-- End of Skills sections -->

    <!-- Portfolio section -->
    @yield('portfoliosection')
    
    <!-- End of portfolio section -->

    <!-- Testmonial Section -->

    @yield('testmonialsection')
    
    <!-- End of testmonial section -->

    <!-- Blog Section -->
    @yield('blogsection')

    <!-- Contact Section -->
    @yield('contact')
    <!-- Hire me section -->
    
    
    <!-- End od Hire me section. -->

    
   
   
    <!-- End of Contact Section -->

    <!-- Page Footer -->
    @include('layout.footer')
   
    <!-- End of page footer -->
	
	<!-- core  -->
    <script src= {{ asset('assets/vendors/jquery/jquery-3.4.1.js') }}></script>
    <script src={{ asset('assets/vendors/bootstrap/bootstrap.bundle.js') }}></script>
    <!-- bootstrap 3 affix -->
	<script src={{ asset('assets/vendors/bootstrap/bootstrap.affix.js') }}></script>

    <!-- steller js -->
    <script src={{ asset('assets/js/steller.js') }}></script>

</body>
</html>