<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Srilanka - About Us</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-woox-travel.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <style>
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
            border: 5px solid #ccc;
        }

        .mySlides img {
            width: 100%;
            height: auto;
            border: 2px solid #fff;
            border-radius: 10px;
        }

        .fade {
            animation-name: fade;
            animation-duration: 2s;
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }
    </style>



</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo">
                            <img src="assets/images/logo.png.webp" alt="" style="width: 150px; height: auto; border: 1px solid red;">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="/" class="active">Home</a></li>
                            <li><a href="/about">About</a></li>
                            <li><a href="/details">Details</a></li>
                            <li><a href="/hotels">Hotels</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- ***** About Us Section Start ***** -->
    <section class="about-us section">
        <div class="container">
            <h2 style="color: #EFDDB6; text-align: center;">Eastern Province</h2>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <div class="slideshow-container">
                            <div class="mySlides fade">
                                <img src="assets/images/image1.jpg" style="width:100%">
                            </div>

                            <div class="mySlides fade">
                                <img src="assets/images/image2.jpg" style="width:100%">
                            </div>

                            <div class="mySlides fade">
                                <img src="assets/images/image3.jpg" style="width:100%">
                            </div>

                            <div class="mySlides fade">
                                <img src="assets/images/image4.jpg" style="width:100%">
                            </div>

                            <div class="mySlides fade">
                                <img src="assets/images/image5.jpg" style="width:100%">
                            </div>
                        </div>
                        <!-- Slideshow script -->
                        <script>
                            var slideIndex = 0;
                            showSlides();

                            function showSlides() {
                                var i;
                                var slides = document.getElementsByClassName("mySlides");
                                for (i = 0; i < slides.length; i++) {
                                    slides[i].style.display = "none";
                                }
                                slideIndex++;
                                if (slideIndex > slides.length) {
                                    slideIndex = 1
                                }
                                slides[slideIndex - 1].style.display = "block";
                                setTimeout(showSlides, 2000); // Change image every 2 seconds
                            }
                        </script>
                        <!-- Slideshow script end -->
                        <div style="margin: 0 auto; max-width: 800px; text-align: justify; padding: 20px;">
                            <p style="font-size: 18px; line-height: 1.6; color: #555;">The Eastern Province of Sri Lanka is a region known for its beautiful beaches, lush landscapes, and rich cultural heritage. Situated on the eastern coast of the island, this province offers visitors a diverse range of attractions and experiences to enjoy.</p>
                            <h4 style="color: #EFDDB6; margin-top: 30px;">Beaches and Lagoons</h4>
                            <p style="font-size: 16px; line-height: 1.5; color: #555;">The Eastern Province is famous for its pristine beaches and crystal-clear lagoons. Arugam Bay, often referred to as the surfing capital of Sri Lanka, attracts surfers from around the world with its perfect waves and laid-back vibe. Pasikudah and Kalkudah are renowned for their shallow waters and powdery white sands, making them ideal for swimming and snorkeling.</p>
                            <h4 style="color: #EFDDB6; margin-top: 30px;">Cultural Heritage</h4>
                            <p style="font-size: 16px; line-height: 1.5; color: #555;">In addition to its natural beauty, the Eastern Province is home to a wealth of cultural treasures. The city of Batticaloa is known for its historic Dutch Fort and picturesque lagoon, while the nearby Kallady Bridge offers stunning views of the surrounding mangrove forests. Visitors can also explore ancient temples, such as the Koneswaram Kovil in Trincomalee, which dates back thousands of years and is dedicated to the Hindu god Shiva.</p>
                            <h4 style="color: #EFDDB6; margin-top: 30px;">Travel Destinations</h4>
                            <ul style="list-style-type: disc; font-size: 16px; line-height: 1.5; color: #555;">
                                <li>Arugam Bay</li>
                                <li>Pasikudah Beach</li>
                                <li>Kalkudah Beach</li>
                                <li>Batticaloa Dutch Fort</li>
                                <li>Koneswaram Kovil</li>
                                <li>Kallady Bridge</li>
                                <li>Nilaveli Beach</li>
                                <li>Pigeon Island National Park</li>
                            </ul>
                            <h4 style="color: #EFDDB6; margin-top: 30px;">Adventure and Wildlife</h4>
                            <p style="font-size: 16px; line-height: 1.5; color: #555;">For those seeking adventure and wildlife encounters, the Eastern Province offers plenty of opportunities. Pigeon Island National Park, located off the coast of Trincomalee, is a protected marine reserve teeming with colorful coral reefs and diverse marine life. Visitors can snorkel or dive amidst schools of tropical fish and explore the island's pristine beaches and rocky coves.</p>
                            <p style="font-size: 16px; line-height: 1.5; color: #555;">Additionally, the province is home to several nature reserves and bird sanctuaries, such as the Kumana National Park and the Maduru Oya National Park, where travelers can spot a variety of bird species, including migratory birds and endemic species.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Us Section End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <div class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h2>Are You Looking To Travel ?</h2>
                    <h4>You Can Book Hotel Using This Site</h4>
                </div>
                <div class="col-lg-4">
                    <div class="border-button">
                        <a href="https://www.booking.com/country/lk.en.html?aid=1610687;label=lk-ck3uN92IfBEwdZxHp32E1gS409815327264:pl:ta:p1:p2:ac:ap:neg:fi:tiaud-2007787596709:kwd-3404070877:lp1009920:li:dec:dm:ppccp=UmFuZG9tSVYkc2RlIyh9YfpWGnRw6lOGgfEoJVv7zYo;ws=&gad_source=1&gclid=CjwKCAjwl4yyBhAgEiwADSEjeFlasstgqMga4hnErsrkzsLli72zfL82JJxanBHpG85ZzkBpCIjNkBoCShkQAvD_BwE">Book Yours Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright © 2024 <a href="#">SriLanka Travel</a> Company. All rights reserved.
                        <br>Design: <a href="www.linkedin.com/in/charith-dissanayaka-966344231" target="_blank" title="Linked in">Charith Lakshan</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/popup.js"></script>
    <script src="assets/js/custom.js"></script>

    <script>
        $(".option").click(function() {
            $(".option").removeClass("active");
            $(this).addClass("active");
        });
    </script>

</body>

</html>