<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Personal Portfolio - A R Ahmed Hridoy</title>
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
    <!-- jquery cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
    <!-- Navbar Start -->
    <nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
        <a href="{{ url('/') }}" class="navbar-brand ml-lg-3">
            <h1 class="m-0 display-5"><span class="text-primary">Port</span>Folio</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse px-lg-3" id="navbarCollapse">
            <div class="navbar-nav m-auto py-0">
                <a href="#home" class="nav-item nav-link active">Home</a>
                <a href="#about" class="nav-item nav-link">About</a>
                <a href="#qualification" class="nav-item nav-link">Quality</a>
                <a href="#skill" class="nav-item nav-link">Skill</a>
                <a href="#service" class="nav-item nav-link">Service</a>
                <a href="#portfolio" class="nav-item nav-link">Portfolio</a>
                <a href="#testimonial" class="nav-item nav-link">Review</a>
                <a href="#blog" class="nav-item nav-link">Blog</a>
                <a href="#contact" class="nav-item nav-link">Contact</a>
            </div>
            <a href="tel:+88{{ @$get_data_about[0]->phone }}" class="btn btn-outline-primary d-none d-lg-block">Hire Me</a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>        
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="{{ @$get_data[0]->video }}" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary d-flex align-items-center mb-5 py-5" id="home" style="min-height: 100vh;">
        <div class="container">
            
            <div class="row align-items-center">
                <div class="col-lg-5 px-5 pl-lg-0 pb-5 pb-lg-0">
                    <img class="img-fluid w-100 rounded-circle shadow-sm" src="{{ url('img/'.@$get_data[0]->image) }}" alt="Image">
                </div>
                <div class="col-lg-7 text-center text-lg-left">
                    <h3 class="text-white font-weight-normal mb-3">I'm</h3>
                    <h1 class="display-3 text-uppercase text-primary mb-2" style="-webkit-text-stroke: 2px #ffffff;">{{ @$get_data[0]->name }}</h1>
                    <h1 class="typed-text-output d-inline font-weight-lighter text-white"></h1>
                    <div class="typed-text d-none">{{ @$get_data[0]->experience }}</div>
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                        <a href="{{ @$get_data[0]->cv }}" class="btn btn-outline-light mr-5">Download CV</a>
                        <button type="button" class="btn-play" data-toggle="modal"
                            data-src="{{ @$get_data[0]->video }}" data-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="font-weight-normal text-white m-0 ml-4 d-none d-sm-block">Play Video</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5" id="about">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">About</h1>
                <h1 class="position-absolute text-uppercase text-primary">About Me</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid rounded w-100" src="{{ url('img/about/'.@$get_data_about[0]->image_about) }}" alt="About">
                </div>
                <div class="col-lg-7">
                    <h3 class="mb-4">{{ @$get_data_about[0]->title }}</h3>
                    <p>{{ @$get_data_about[0]->description }}</p>
                    <div class="row mb-3">
                        <div class="col-sm-6 py-2"><h6>Name: <span class="text-secondary">{{ @$get_data_about[0]->name }}</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Birthday: <span class="text-secondary">{{ @$get_data_about[0]->birthday }}</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Degree: <span class="text-secondary">{{ @$get_data_about[0]->degree }}</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Experience: <span class="text-secondary">{{ @$get_data_about[0]->experience }}</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Phone: <span class="text-secondary">+88{{ @$get_data_about[0]->phone }}</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Email: <span class="text-secondary">{{ @$get_data_about[0]->email }}</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Address: <span class="text-secondary">{{ @$get_data_about[0]->address }}</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Freelance: <span class="text-secondary">{{ @$get_data_about[0]->freelance }}</span></h6></div>
                    </div>
                    <a href="tel:+88{{ @$get_data_about[0]->phone }}" class="btn btn-outline-primary mr-4">Hire Me</a>
                    <a href="{{ @$get_data_about[0]->learn }}" class="btn btn-outline-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Qualification Start -->
    <div class="container-fluid py-5" id="qualification">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Quality</h1>
                <h1 class="position-absolute text-uppercase text-primary">Education & Expericence</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h3 class="mb-4">My Education</h3>
                    <div class="border-left border-primary pt-2 pl-4 ml-2">
                        @foreach ($get_data_quality as $data)
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">{{ $data->degree_name }}</h5>
                            <p class="mb-2"><strong>{{ $data->institution_name }}</strong> | <small>{{ $data->passing_year }}</small></p>
                            <p>{{ $data->description }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-4">My Experience</h3>
                    <div class="border-left border-primary pt-2 pl-4 ml-2">
                        @foreach ($get_data_experience as $data)
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">{{ $data->experience_name }}</h5>
                            <p class="mb-2"><strong>{{ $data->company_name }}</strong> | <small>{{ $data->year }}</small></p>
                            <p>{{ $data->description }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Qualification End -->


    <!-- Skill Start -->
    <div class="container-fluid py-5" id="skill">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Skills</h1>
                <h1 class="position-absolute text-uppercase text-primary">My Skills</h1>
            </div>
            <div class="row align-items-center">
                @foreach ($get_data_skill as $data)
                <div class="col-md-6">
                    
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">{{ $data->skill_name }}</h6>
                            <h6 class="font-weight-bold">{{ $data->skill_percent }}%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="{{ $data->skill_percent }}" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    
                    {{-- <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">CSS</h6>
                            <h6 class="font-weight-bold">85%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">PHP</h6>
                            <h6 class="font-weight-bold">90%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div> --}}
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Skill End -->


    <!-- Services Start -->
    <div class="container-fluid pt-5" id="service">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Service</h1>
                <h1 class="position-absolute text-uppercase text-primary">My Services</h1>
            </div>
            <div class="row pb-3">
                @foreach ($get_data_service as $data)
                <div class="col-lg-4 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fa-2x {{ $data->icon }} service-icon bg-primary text-white mr-3"></i>
                        <h4 class="font-weight-bold m-0">{{ $data->service_name }}</h4>
                    </div>
                    <p>{{ $data->description }}</p>
                    <a class="border-bottom border-primary text-decoration-none" href="{{ $data->link }}">Read More</a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Portfolio Start -->
    <div class="container-fluid pt-5 pb-3" id="portfolio">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Gallery</h1>
                <h1 class="position-absolute text-uppercase text-primary">My Portfolio</h1>
            </div>
            {{-- <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">
                        <li class="btn btn-sm btn-outline-primary m-1 active"  data-filter="*">All</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".first">Design</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".second">Development</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".third">Marketing</li>
                    </ul>
                </div>
            </div> --}}
            <div class="row portfolio-container">
                @foreach ($get_data_portfolio as $data)
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                        <div class="position-relative overflow-hidden mb-2">
                            @if(!empty($data->image))
                            <a href="{{ $data->portfolio_link }}"> <img class="img-fluid rounded w-100" src="{{ url('img/portfolio/'.$data->image) }}" alt="Portfolio Image"></a>
                            @endif
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="{{ $data->portfolio_link }}" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                        <h5 class="font-weight-medium mb-4 mt-4">{{ $data->title }}</h5>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Portfolio End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5" id="testimonial">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Review</h1>
                <h1 class="position-absolute text-uppercase text-primary">Clients Say</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        @foreach ($get_data_review as $data)
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4">{{ $data->message }}</h4>
                            @if(!empty($data->image))
                            <img class="img-fluid rounded-circle mx-auto mb-3" src="{{ url('img/review/'.$data->image) }}" style="width: 80px; height: 80px;">
                            @endif
                            <h5 class="font-weight-bold m-0">{{ $data->name }}</h5>
                            <span>{{ $data->profession }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-fluid pt-5" id="blog">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Blog</h1>
                <h1 class="position-absolute text-uppercase text-primary">Latest Blog</h1>
            </div>
            <div class="row">
                @foreach ($get_data_blog as $data)
                <div class="col-lg-4 mb-5">
                    <div class="position-relative mb-4">
                        @if(!empty($data->image))
                        <img class="img-fluid rounded w-100" src="{{ url('img/blog/'.$data->image) }}" alt="Image">
                        @endif
                        {{-- <div class="blog-date">
                            <h4 class="font-weight-bold mb-n1">01</h4>
                            <small class="text-white text-uppercase">Jan</small>
                        </div> --}}
                    </div>
                    <h5 class="font-weight-medium mb-4">{{ $data->title }}</h5>
                    {{-- <a class="btn btn-sm btn-outline-primary py-2" href="{{ url('blog/'.$data->id) }}">Read More</a> --}}
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Blog End -->
    

    <!-- Contact Start -->
    <div class="container-fluid py-5" id="contact">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Contact</h1>
                <h1 class="position-absolute text-uppercase text-primary">Contact Me</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form text-center">
                        <div id="success" class="text-success"></div><br>

                        <form id="contact-frm" method="POST" action="{{ url('contact') }}">
                            @csrf
                            <div class="form-row">
                                <div class="control-group col-sm-6">
                                    <input type="text" class="form-control p-4" name="name" id="name" placeholder="Your Name" required/>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group col-sm-6">
                                    <input type="email" class="form-control p-4" name="email" id="email" placeholder="Your Email" required/>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" name="subject" placeholder="Subject" required/>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control py-3 px-4" rows="5" name="message" placeholder="Message" required></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-outline-primary" type="submit" value="Add">Send Message</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

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


    <!-- message -->
    {{-- <script>
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).fadeOut(500, function(){
                $(this).remove(); 
            });
        }, 5000);
    </script> --}}

    <!-- contact form scprit -->
    <script>
        $(document).ready(function(){
            $('#contact-frm').on('submit',function(event){
                event.preventDefault();
                jQuery.ajax({
                    url: "{{ url('contact') }}",
                    data: jQuery('#contact-frm').serialize(),
                    type: 'post',

                    success:function(result){

                        $('#success').css('display', 'block');
                        jQuery('#success').html(result.success);
                        $('#success').delay(6000).fadeOut('slow');

                        jQuery('#contact-frm')[0].reset();
                    },
                });
                
                
            });
        });
    </script>
    <!-- JavaScript Libraries -->
    
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