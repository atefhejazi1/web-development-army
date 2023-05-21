<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Development Army</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Konkhmer+Sleokchher&family=Oswald:wght@300;400&family=Roboto+Slab:wght@400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="{{ asset('images/logo.png') }}">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg ">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('images/logo.png') }}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">All Courses</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Guid</a>
                        </li>

                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Skills</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">Client Says</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>


                    </ul>

                </div>
            </div>
        </nav>

        <div class="header-data">
            <div class="text-center">
                <h1>Web Development Army</h1>
                <p>
                    Web Development <br> Courses For <br> <span>EveryBody</span>
                </p>

                <div class="social-media-link">
                    <a href="https://twitter.com/AtefHejazi" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                    <a href="https://www.facebook.com/groups/218316453734605" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/web_development_army" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.youtube.com/@WebDevelopmentArmy" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                    <a href="https://www.linkedin.com/in/atefhejazi/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </header>


    <section class="courses text-center">
        <div class="container">
            <h2>YouTube Channel</h2>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="course-item">
                        <a href="#">
                            <img src="{{ asset('images/PHPMySQL.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="course-item">
                        <a href="#">
                            <img src="{{ asset('images/bootstrap.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="course-item">
                        <a href="#">
                            <img src="{{ asset('images/Owl Carousel.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="course-item">
                        <a href="#">
                            <img src="{{ asset('images/Google Maps.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="course-item">
                        <a href="#">
                            <img src="{{ asset('images/Google Fonts.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="course-item">
                        <a href="#">
                            <img src="{{ asset('images/Font Awesome.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="course-item">
                        <a href="#">
                            <img src="{{ asset('images/BG Media Query.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="course-item">
                        <a href="#">
                            <img src="{{ asset('images/Adobe Xd.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="about-me">
        <div class="container">

            <div class="text-center">
                <h2>Who Is <span>Atef Hejazi?</span></h2>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <img src="{{ asset('images/about/Untitled-1.png') }}" alt="">
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="about-data">
                        <p>
                            I am looking forward to developing my further skills and accomplishing higher career and life goals. I consider the key strengths that I have gained through my academic and professional work experience.
                        </p>

                        <p> Academically, I have finished a Bachelor's degree in Software Development. Moreover, I hold many training courses in addition.</p>

                        <p> Professionally I have been involved in computer development with more than 5 years of experience in computer engineering, and IT operations teams, but my capabilities are not limited to those fields, I am currently working to extend my knowledge in cloud platforms such as #AWS.
                        </p>

                        <p> Finally, I always hope to work on new challenges and adventures and always aspire to work in an international team.
                            #AWS</p>
                    </div>
                </div>
            </div>
        </div>

    </section>



    <section class="allBlogs">
        <div class="text-center">
            <h2>All Blogs</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="blog">
                        <img src="{{ asset('images/Adobe Xd.jpg') }}" alt="">
                        <h4><span>Back End / </span> January 01, 2045 </h4>
                        <h3>Laravel News</h3>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse quisquam aut at enim unde? Commodi unde, praesentium debitis asperiores dolores explicabo voluptatibus dolore? Aperiam, reprehenderit? Optio quibusdam aspernatur laborum consectetur.
                        </p>
                        <button class="btn">View Details</button>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="blog">
                        <img src="{{ asset('images/Adobe Xd.jpg') }}" alt="">
                        <h4><span>Back End / </span> January 01, 2045 </h4>
                        <h3>Laravel News</h3>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse quisquam aut at enim unde? Commodi unde, praesentium debitis asperiores dolores explicabo voluptatibus dolore? Aperiam, reprehenderit? Optio quibusdam aspernatur laborum consectetur.
                        </p>
                        <button class="btn">View Details</button>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="blog">
                        <img src="{{ asset('images/Adobe Xd.jpg') }}" alt="">
                        <h4><span>Back End / </span> January 01, 2045 </h4>
                        <h3>Laravel News</h3>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse quisquam aut at enim unde? Commodi unde, praesentium debitis asperiores dolores explicabo voluptatibus dolore? Aperiam, reprehenderit? Optio quibusdam aspernatur laborum consectetur.
                        </p>
                        <button class="btn">View Details</button>
                    </div>
                </div>
            </div>
        </div>

    </section>



    <section class="client-says">
        <div class="text-center">
            <h2>What <span>Clients</span> Say ?</h2>
        </div>
        <div class="container">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam sit esse hic sapiente nisi eum obcaecati, laudantium id illo voluptate dolor nobis et, a sed reprehenderit natus voluptatum repellendus placeat?
                        </p>

                        <h3>Hamdan Hejazi</h3>

                        <h5>DevOps Engineer</h5>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>


    <!-- <section class="contact-me">
        <div class="text-center">
            <h2>Contact Me</h2>
        </div>

        <div class="container">
            @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
            @endif

            <div id="message-response"></div>

            <form id="message-form">
                @csrf
                <div class="row">
                    <div class="mb-3 col-sm-12 col-md-6">
                        <label class="d-flex align-items-center fs-6 mb-2">Name : </label>
                        <input type="text" class="form-control" placeholder="Enter Your Name" name="name" />
                    </div>
                    <div class="mb-3 col-sm-12 col-md-6">
                        <label class="d-flex align-items-center fs-6 mb-2">Email : </label>
                        <input type="email" class="form-control" placeholder="Enter Your Name" name="email" />
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-12">
                        <label class="d-flex align-items-center fs-6 mb-2">Subject : </label>
                        <input type="text" class="form-control" placeholder="Enter Your Subject" name="subject" />
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-12">
                        <label class="d-flex align-items-center fs-6 mb-2">Message : </label>
                        <textarea name="message" id="" rows="10" placeholder="Message"></textarea>
                    </div>
                </div>

                <button class="btn" type="submit">Send Message</button>
            </form>
        </div>
    </section> -->

     <section class="contact-me">
        <div class="text-center">
            <h2>Contact Me</h2>
        </div>

        <div class="container">
            @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
            @endif
            <form method="post" action="{{ url('/messages') }}">
                @csrf
                <div class="row">
                    <div class="mb-3 col-sm-12 col-md-6">
                        <label class="d-flex align-items-center fs-6 mb-2">Name : </label>
                        <input type="text" class="form-control" placeholder="Enter Your Name" name="name" />
                    </div>
                    <div class="mb-3 col-sm-12 col-md-6">
                        <label class="d-flex align-items-center fs-6 mb-2">Email : </label>
                        <input type="email" class="form-control" placeholder="Enter Your Name" name="email" />
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-12">
                        <label class="d-flex align-items-center fs-6 mb-2">Subject : </label>
                        <input type="text" class="form-control" placeholder="Enter Your Subject" name="subject" />
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-12">
                        <label class="d-flex align-items-center fs-6 mb-2">Message : </label>
                        <textarea name="message" id="" rows="10" placeholder="Message"></textarea>
                    </div>
                </div>

                <button class="btn" type="submit">Send Message</button>
            </form>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->

    <script src="{{ asset('js/script.js') }}"></script>


    <!-- <script>
        $(document).ready(function() {
            $('#message-form').on('submit', function(e) {
                e.preventDefault();

                var formData = $(this).serialize();

                $.ajax({
                    url: "{{ url('/messages') }}",
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        $('#message-response').text(response.message);
                        $('#message-form')[0].reset();
                    },
                    // error: function(xhr) {
                    //     $('#message-response').text('Error: ' + xhr.responseText);
                    // }
                });
            });
        });
    </script> -->

</body>

</html>