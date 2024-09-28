<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Blog - A R Ahmed Hridoy</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Personal Portfolio" name="keywords">
    <meta content="Personal Portfolio" name="description">

    <!-- Favicon -->
    <link href="{{ url('fontend/img/Laravel.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ url('fontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ url('fontend/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ url('fontend/css/style.css') }}" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
    <div class="fixed-top shadow-sm bg-light py-3 py-lg-0 px-lg-5" style="display:flex; justify-content: space-between; align-items: center; padding: 0.5rem 1rem; flex-wrap: wrap;">
        <a href="{{ url('/') }}" class="navbar-brand ml-lg-3">
            <h1 class="m-0 display-5"><span class="text-primary">Port</span>Folio</h1>
        </a>
        <a href="tel:+8801611633630" class="btn btn-outline-primary d-lg-block">Hire Me</a>
    </div>
    <!-- Navbar Start -->
    {{-- <nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
        <a href="{{ url('/') }}" class="navbar-brand ml-lg-3">
            <h1 class="m-0 display-5"><span class="text-primary">Port</span>Folio</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse px-lg-3" id="navbarCollapse">
            <div class="navbar-nav m-auto py-0">
                <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                <a href="{{ url('/') }}" class="nav-item nav-link">About</a>
                <a href="{{ url('/') }}" class="nav-item nav-link">Quality</a>
                <a href="{{ url('/') }}" class="nav-item nav-link">Skill</a>
                <a href="{{ url('/') }}" class="nav-item nav-link">Service</a>
                <a href="{{ url('/') }}" class="nav-item nav-link">Portfolio</a>
                <a href="{{ url('/') }}" class="nav-item nav-link">Review</a>
                <a href="{{ url('/') }}" class="nav-item nav-link">Blog</a>
                <a href="{{ url('/') }}" class="nav-item nav-link">Contact</a>
            </div>
        </div>
        <a href="tel:+8801611633630" class="btn btn-outline-primary d-lg-block">Hire Me</a>
    </nav> --}}
    <!-- Navbar End -->

    <!-- Blog Start -->
    <div class="container-fluid py-5 mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="">
                        <div class="text-center">
                            <h1 class="font-weight-bold mb-4">{{ $get_blog_post_data->title }}</h1>
                            @if(!empty($get_blog_post_data->image))
                            <img class="text-center mb-3 w-100" src="{{ url('img/blog/'.$get_blog_post_data->image) }}">
                            @endif
                            <h5 class="font-weight-light m-0">{{ $get_blog_post_data->description }}</h5>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-primary text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="container text-center py-5">
            <div class="d-flex justify-content-center mb-4">
                <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-light btn-social" href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="d-flex justify-content-center mb-3">
                <a class="text-white" href="#">Privacy</a>
                <span class="px-3">|</span>
                <a class="text-white" href="#">Terms</a>
                <span class="px-3">|</span>
                <a class="text-white" href="#">FAQs</a>
                <span class="px-3">|</span>
                <a class="text-white" href="#">Help</a>
            </div>
            <p class="m-0">&copy; <a class="text-white font-weight-bold" href="#">Domain Name</a>. All Rights Reserved. Designed by <a class="text-white font-weight-bold" href="https://htmlcodex.com">HTML Codex</a>
            </p>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Scroll to Bottom -->
    <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

    <!-- Back to Top -->
    <a href="#" class="btn btn-outline-dark px-0 back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('fontend/lib/typed/typed.min.js')}}"></script>
    <script src="{{ url('fontend/lib/easing/easing.min.js')}}"></script>
    <script src="{{ url('fontend/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ url('fontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{ url('fontend/lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{ url('fontend/lib/lightbox/js/lightbox.min.js')}}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ url('fontend/mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{ url('fontend/mail/contact.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{ url('fontend/js/main.js')}}"></script>
</body>

</html>
