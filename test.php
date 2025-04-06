<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>For Students</title>
        <!--=============== REMIXICONS ===============-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,400..900;1,400..900&family=Ballet:opsz@16..72&family=Carattere&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Great+Vibes&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Merienda:wght@300..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Rasa:ital,wght@0,300..700;1,300..700&display=swap"
            rel="stylesheet"
        />

        <!--=============== SWIPER CSS ===============-->
        <link rel="stylesheet" href="https://iragufoundation.org/assets/css/swiper-bundle.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <link rel="stylesheet" href="https://iragufoundation.org/assets/css/style.css" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
            integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
        <style>
            .course-dropdown {
                position: relative;
            }

            .subjects-dropdown {
                display: none; /* Initially hidden */
                position: absolute;
                left: 100%; /* Aligns to the right of the parent */
                top: 0;
                background-color: #f9f9f9;
                border: 1px solid #ddd;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                z-index: 1000;
            }

            .course-dropdown:hover .subjects-dropdown {
                display: block; /* Show on hover */
            }

            .course-link {
                display: block;
                padding: 5px 10px;
                color: #333;
                text-decoration: none;
                transition: background-color 0.3s ease;
            }

            .course-link:hover {
                background-color: #f0f0f0;
            }

            .subject-link {
                display: block;
                padding: 5px;
                color: #333;
                text-decoration: none;
            }

            .subject-link:hover {
                background-color: #f0f0f0;
            }
        </style>

        <!-- In <head> -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

        <style>
            body {
                /* font-family: 'Playfair Display', serif; */
                padding-top: 80px;
                background-color: #f8f9fa;
            }
            .left-menu {
                height: -webkit-fill-available;
                background: #fff;
                border-radius: 1rem;
                padding: 20px;
            }
            .nav-pills .nav-link {
                border-radius: 0;
                color: #000;
            }
            .nav-pills .nav-link.active {
                background-color: red;
                color: #fff;
            }
            .tab-content {
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
                margin-bottom: 20px;
            }
            .card {
                border: none;
                box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.1);
            }
            .slider-img {
                width: 100%;
                height: auto;
                border-radius: 10px;
                margin-bottom: 20px;
            }
            .download-btn {
                width: 100%;
                padding: 10px;
                font-size: 16px;
            }
            .right-panel {
                padding: 20px;
                height: -webkit-fill-available;
                background: #fff;
                border-radius: 1rem;
            }
            header img.logo {
                max-width: 220px;
                height: auto;
            }
        </style>
    </head>
    <body>
        <header class="fixed-top">
            <nav class="navbar navbar-expand-lg pe-5 bg-s-color d-flex justify-content-between">
                <a href="https://iragufoundation.org"><img src="https://iragufoundation.org/assets/img/logo.jpg" id="offcanvasScrollingLabel" alt="logo" width="250px" class="logo" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                    <div class="offcanvas-header">
                        <img src="https://iragufoundation.org/assets/img/logo.jpg" id="offcanvasScrollingLabel" alt="logo" width="250px" class="logo" />
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="navbar-nav ms-auto nav-color d-flex align-items-center">
                            <a class="nav-link two" aria-current="page" href="https://iragufoundation.org">Home</a>
                            <a class="nav-link two" href="https://iragufoundation.org/#about-us">About Us</a>
                            <a class="nav-link two" href="./">For Students</a>
                            <a href="https://iragufoundation.org/#gallery" class="nav-link two">Gallery</a>
                            <a href="https://iragufoundation.org/#testimonials" class="nav-link two">Testimonials</a>
                            <a href="https://iragufoundation.org/#contact-us" class="nav-link two">Contact Us</a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="container-fluid p-4">
            <div class="row">
                <div class="col-md-2 left-menu mb-3" id="v-pills-tab" role="tablist">
                    <button class="btn btn-outline-danger download-btn active" data-bs-toggle="pill" data-bs-target="#handwriting">Handwriting</button>
                    <button class="btn btn-outline-danger download-btn mt-3" data-bs-toggle="pill" data-bs-target="#science">Science</button>
                    <button class="btn btn-outline-danger download-btn mt-3" data-bs-toggle="pill" data-bs-target="#english">Common English</button>
                </div>

                <div class="col-md-7">
                    <img src="https://img.pikbest.com/origin/10/09/25/28IpIkbEsTzia.jpg!w700wp" alt="Banner" style="width: -webkit-fill-available;" class="img-fluid rounded mb-3" />

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="handwriting">
                            <h4>Why Handwriting?</h4>
                            <p>Learn the importance of good handwriting and its impact on learning.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card p-3 mb-3">
                                        <h5 class="card-title">Cursive Training</h5>
                                        <p>Improve penmanship with structured exercises.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card p-3 mb-3">
                                        <h5 class="card-title">Methodology</h5>
                                        <p>Unique methods to help children write neatly.</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="card p-3 mb-3">
                                        <h5 class="card-title">Cursive Training</h5>
                                        <p>Improve penmanship with structured exercises.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card p-3 mb-3">
                                        <h5 class="card-title">Methodology</h5>
                                        <p>Unique methods to help children write neatly.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="science">
                            <h4>Science Programs</h4>
                            <p>Interactive and engaging science content for young learners.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card p-3 mb-3">
                                        <h5 class="card-title">Physics Fun</h5>
                                        <p>Easy experiments that teach real-world science.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card p-3 mb-3">
                                        <h5 class="card-title">Biology Basics</h5>
                                        <p>Learn human body, plants, and nature.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="english">
                            <h4>Common English Skills</h4>
                            <p>Daily use English grammar and speaking skills for all levels.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card p-3 mb-3">
                                        <h5 class="card-title">Vocabulary Boost</h5>
                                        <p>Learn new words with meanings and usage.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card p-3 mb-3">
                                        <h5 class="card-title">Daily Conversations</h5>
                                        <p>Practice dialogues for real situations.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 right-panel">
                    <div class="image-slider">
                        <div><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKbVAEp7jgKYb3VsuNOEdTk-dPNJFe9vFk_81VAD1tRm0Y2Hf9krbXbBvJAloUI-ZnC8g&usqp=CAU" class="slider-img" alt="Slide 1"></div>
                        <div><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKbVAEp7jgKYb3VsuNOEdTk-dPNJFe9vFk_81VAD1tRm0Y2Hf9krbXbBvJAloUI-ZnC8g&usqp=CAU" class="slider-img" alt="Slide 2"></div>
                        <div><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKbVAEp7jgKYb3VsuNOEdTk-dPNJFe9vFk_81VAD1tRm0Y2Hf9krbXbBvJAloUI-ZnC8g&usqp=CAU" class="slider-img" alt="Slide 3"></div>
                    </div>

                    <a href="#" class="btn btn-secondary download-btn mt-3">Download Brochure</a>

                    <img src="assets/img/qr.jpeg" alt="Banner" style="width: -webkit-fill-available;" class="img-fluid rounded mt-4" />
                </div>

            </div>
        </div>

        <!--=============== SWIPER JS ===============-->
        <script src="https://iragufoundation.org/assets/js/swiper-bundle.min.js"></script>
        <script src="https://iragufoundation.org/assets/js/animate.js"></script>
        <script src="https://iragufoundation.org/assets/js/scrollreveal.js"></script>
        <script src="https://iragufoundation.org/assets/js/script.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.image-slider').slick({
                dots: true,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 5000, // 5 seconds per slide
                pauseOnHover: false
            });
        });
    </script>
</html>