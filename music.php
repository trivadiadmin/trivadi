<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Music</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS Files -->
    <link href="assets/css/variables.css" rel="stylesheet">
    <link href="assets/css/slider.css" rel="stylesheet">
    <link href="assets/css/main.scss" rel="stylesheet">

    <!-- =======================================================
  * Template Name: ZenBlog - v1.2.1
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <?php include 'navbar.php';?>

    <main id="main">


        <section>
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <h2 class="display-4">Music</h2>
                                <h2 class="display-4"> Swapna’s medley of melodies</h2>

                            </div>
                        </div>
                    </div>


                </div>
                <div class="container">
                    <div class="mySlides">
                        <div class="numbertext">1 / 6</div>
                        <img src="img_woods_wide.jpg" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">2 / 6</div>
                        <img src="img_5terre_wide.jpg" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">3 / 6</div>
                        <img src="img_mountains_wide.jpg" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">4 / 6</div>
                        <img src="img_lights_wide.jpg" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">5 / 6</div>
                        <img src="img_nature_wide.jpg" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">6 / 6</div>
                        <img src="img_snow_wide.jpg" style="width:100%">
                    </div>

                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                    <a class="next" onclick="plusSlides(1)">❯</a>

                    <div class="caption-container">
                        <p id="caption"></p>
                    </div>

                    <div class="row">
                        <div class="column">
                            <img class="demo cursor"
                                src="https://static.wixstatic.com/media/cb5196_ca7d997816154fbfb3c3558b50bfb808~mv2.png/v1/fit/w_288,h_289,q_90/cb5196_ca7d997816154fbfb3c3558b50bfb808~mv2.webp"
                                style="width:100%" onclick="currentSlide(1)" alt="The Woods">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="img_5terre.jpg" style="width:100%" onclick="currentSlide(2)"
                                alt="Cinque Terre">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="img_mountains.jpg" style="width:100%"
                                onclick="currentSlide(3)" alt="Mountains and fjords">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="img_lights.jpg" style="width:100%" onclick="currentSlide(4)"
                                alt="Northern Lights">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="img_nature.jpg" style="width:100%" onclick="currentSlide(5)"
                                alt="Nature and sunrise">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="img_snow.jpg" style="width:100%" onclick="currentSlide(6)"
                                alt="Snowy Mountains">
                        </div>
                    </div>
                </div>
            </div>
        </section>



    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include 'footer.php'; ?>

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("demo");
        let captionText = document.getElementById("caption");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        captionText.innerHTML = dots[slideIndex - 1].alt;
    }
    </script>

</body>

</html>