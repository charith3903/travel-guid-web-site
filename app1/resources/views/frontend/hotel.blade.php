<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>SriLanka Travel Hotel Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-woox-travel.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!--

TemplateMo 580 Woox Travel

https://templatemo.com/tm-580-woox-travel

-->
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
                            <img src="assets/images/logo.png.webp" alt="">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="/">Home</a></li>
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
    <!-- ***** Header Area End ***** -->

    <div class="second-page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4>WELCOME TO SHANGRI-LA</h4>
                    <h2 style="color:aqua">Make Your Reservation</h2>
                    <p>The Shangri-La Hotel Colombo is a luxurious five-star hotel situated in the heart of Colombo, the capital city of Sri Lanka. Here's a detailed description of the hotel:
                        Location: Located along the Galle Face Green promenade, the Shangri-La Hotel Colombo offers stunning views of the Indian Ocean and easy access to many of Colombo's attractions, including historical sites, shopping districts, and cultural landmarks.
                        Accommodation: The hotel features spacious and elegantly appointed rooms and suites, designed to provide guests with utmost comfort and luxury. Each room is equipped with modern amenities, including high-speed internet access, flat-screen TVs, luxurious bedding, and marble bathrooms with separate showers and bathtubs.</p>
                    <div class="main-button"><a href="/about">Discover More</a></div>
                </div>
            </div>
        </div>
    </div>

    <div class="more-info reservation-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="info-item">
                        <i class="fa fa-phone"></i>
                        <h4>Make a Phone Call</h4>
                        <a href="#">+123 456 789 (0)</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="info-item">
                        <i class="fa fa-envelope"></i>
                        <h4>Contact Us via Email</h4>
                        <a href="#">company@email.com</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="info-item">
                        <i class="fa fa-map-marker"></i>
                        <h4>Visit Our Offices</h4>
                        <a href="#">24th Street, colombo/06</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="reservation-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15842.728872981743!2d79.8444362!3d6.9285354!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2593b09364c4f%3A0x7dc13fa1f24d5c16!2sShangri-La%20Colombo!5e0!3m2!1sen!2slk!4v1715760059211!5m2!1sen!2slk" width="100%" height="450px" frameborder="0" style="border:0; border-top-left-radius: 23px; border-top-right-radius: 23px;" allowfullscreen=""></iframe>
                    </div>
                </div>
                <div class="col-lg-12">
                    <form id="reservation-form" name="gs" method="submit" role="search" action="#">
                        <div class="row">
                            <div class="col-lg-12">
                                <h4>Make Your <em>Reservation</em> Through This <em>Form</em></h4>
                            </div>
                            <div class="col-lg-6">
                                <fieldset>
                                    <label for="Name" class="form-label">Your Name</label>
                                    <input type="text" name="Name" class="Name" placeholder="Ex. John Smithee" autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset>
                                    <label for="Number" class="form-label">Your Phone Number</label>
                                    <input type="text" name="Number" class="Number" placeholder="Ex. +xxx xxx xxx" autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset>
                                    <label for="chooseGuests" class="form-label">Number Of Guests</label>
                                    <select name="Guests" class="form-select" aria-label="Default select example" id="chooseGuests" onChange="this.form.click()">
                                        <option selected>ex. 3 or 4 or 5</option>
                                        <option type="checkbox" name="option1" value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4+">4+</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset>
                                    <label for="Number" class="form-label">Check In Date</label>
                                    <input type="date" name="date" class="date" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="chooseDestination" class="form-label">Choose Your Destination</label>
                                    <select name="Destination" class="form-select" aria-label="Default select example" id="chooseCategory" onChange="this.form.click()">
                                        <option selected>Ella</option>
                                        <option value="Italy, Roma">Colombo</option>
                                        <option value="France, Paris">Galle</option>
                                        <option value="Engaland, London">Island wilde</option>
                                        <option value="Switzerland, Lausanne">Other</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button class="main-button">Make Your Reservation Now</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

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