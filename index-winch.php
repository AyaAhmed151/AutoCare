<?php 
include('db.php');

    $user_data = check_user_login();
    $mech_data = check_mech_login();
    $winch_data = check_winch_login();

    if ($mech_data) {
        return header('Location: index-mech.php');
    } else if ($user_data) {
        return header('Location: index-user.php');
    } else if (!$winch_data) {
    return header('Location: first.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Car Services</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="img/logo.png" rel="icon">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
 <!-- Font Awesome -->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
  
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

   
   <link rel="stylesheet" href="assets/css/mdb.min.css" />
  <!-- Main CSS File -->
  <link href="assets/css/style.css?v=<?php echo time();?>" rel="stylesheet">

  <style>
    <?php include "style.css"?>
  </style>
  
</head>

<body>
  <!-- ======= Header ======= -->
<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center">

    <h1 class="logo mr-auto"><a href="index.php">
      <img src="img/logo.png"> 
    </a></h1>
    
    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="winch-orders.php">My Orders</a></li>
        <li><a href="profile.php">My Profile</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul> 
  </div>
</header><!-- End Header -->

<!-- Carousel wrapper -->
<div
  id="carouselDarkVariant"
  class="carousel slide carousel-fade carousel-dark"
  data-mdb-ride="carousel"
>
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-mdb-target="#carouselDarkVariant" data-mdb-slide-to="0" class="active"></li>
    <li data-mdb-target="#carouselDarkVariant" data-mdb-slide-to="1"></li>
    <li data-mdb-target="#carouselDarkVariant" data-mdb-slide-to="2"></li>
  </ol>

  <!-- Inner -->
  <div class="carousel-inner">
    <!-- Single item -->
    <div class="carousel-item active">
      <img src="img/car1.jpg" class="img1" class="d-block w-100" alt="..."/>
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <img src="img/9.jpg" class="img2" class="d-block w-100" alt="..."/>
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <img src="img/winch.jpg" class="img3"class="d-block w-100" alt="..."/>
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
  </div>
  <!-- Inner -->

  <!-- Controls -->
  <a class="carousel-control-prev" href="#carouselDarkVariant" role="button" data-mdb-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselDarkVariant" role="button"
    data-mdb-slide="next" >
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>
<!-- Carousel wrapper -->

<!-----------------btn----------------------->
<section id="butn">
  <div class="container">
  <div class="row">
    <div class="col-sm-4">
        <h1>LOOKING FOR THE <span style="color: #ff6d00;">RIGHT SERVICES</span> </h1>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-3"><button type="button" class="btn btn-success"><a href="winch-orders.php">My Orders</a></button>
  </div>
    <div class="col-sm-3"><button type="button" class="btn btn-success"><a href="winch-page.php">My Profile</a></button>
  </div>
    
  </div>
  </div>
  </section>
<!-----------------end btn--------------------------->

<section class="searchbar">
  <div class="container">
      <div class="row">
          <div class="col-lg-12 max-auto">
        <input type="text" id="search" placeholder="Type to search...">
        <div class="autocom-box">
         <ul class="ul" id="searchresult">
           <li><a href="https://www.google.com/search?q=car+prices+in+egypt&oq=car+prices+&aqs=chrome.1.69i57j0i457j0l2j0i395l6.10561j1j4&sourceid=chrome&ie=UTF-8"> Car Prices in Egypt</a></li>
           <li><a href="shop-car.php">car</a></li>
           <li><a href="quick-winch.php">Winch</a></li>
           <li><a href="quick-mech.php">Mechanical </a></li>
           <li><a href="shop.php">Shop</a></li>
           <li><a href="shop2.php">sell</a></li>
         </ul>
          
        </div>
          </div>
          <div class="icon"><i class="fas fa-search"></i></div>
      </div>
  </div>
</section>
 
<!----------------Carousel-------------------->


    <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
          <h1>The Best Way To Save you on The Road</h1>
        </div>
      </div>
     
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>YOU CAN...</h2>
        </div>

        <div class="row content">
          <div class="col-lg-5">
            <p>
              
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> You can look for a mechanic near you if you are in a remote location and cannot move, and that is safe for you</li>
              <li><i class="ri-check-double-line"></i> You can search for a winch that can reach you in the shortest time</li>
              <li><i class="ri-check-double-line"></i> You can search for a car you want to buy in a short time</li>
              <li><i class="ri-check-double-line"></i> You can offer your car for sale</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <img src="img/suc.png" alt="">
          </div>
        </div>

      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row justify-content-end">

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-toggle="counter-up">65</span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-toggle="counter-up">85</span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-toggle="counter-up">12</span>
              <p>Years of experience</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-toggle="counter-up">15</span>
              <p>Awards</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= About Video Section ======= -->
   ,<!--- <section id="about-video" class="about-video">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-6 video-box align-self-baseline" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/about-video.jpg" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 pt-3 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bx bx-check-double"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bx bx-check-double"></i> Voluptate repellendus pariatur reprehenderit corporis sint.</li>
              <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>

        </div>

      </div>
    </section>--><!-- End About Video Section -->

    <!-- ======= Clients Section ======= -->
<!--<section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section>---><!-- End Clients Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Feedbacks</h2>
        </div>

        <div class="owl-carousel testimonials-carousel">
<div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              My car broke down in the middle of the road, on my way to a very important interview.
I requested the mechanic service and they came within 15 mins, the mechanic was very professional understanding and immediately knew what was wrong and fixed it. I made it to the interview thanks to your services thank you so so much 🙏🏼
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>Samer Samir</h3>
            <h4>Ceo &amp; Founder</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              I was on my way to work when my car all of a sudden shut down literally in the middle of the rign road! I had absolutely no idea where I was and was told that my car needed to be lifted to the automative service.
I booked the towing service on the app, they came instantly offered towing plus tracking of my car and also a car ride to my destination. Very efficient and time saving! Totally recommend using the app ☺️👌🏼.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Osama</h3>
            <h4>Designer</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              I would like to sincerely thank Saviors and all of their staff for the amazing services they provide. 
I was going to be ripped off for a spare part that i discovered on your website it was much cheaper and easily installed. I totally trust and depend on your website. Thank you so much 🙏🏼🤗
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>Yasmine Mohamed</h3>
            <h4>Store Owner</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              In the beginning I thought that this application will offer extremely high prices for towing and repairing but after dealing with them, I figured that they offer nearly lower cost, time saving services and the spare parts shop is just brilliant. Amazing job!! 👌🏼
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>Matthew Fayez</h3>
            <h4>Accountant</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              By far the fastest web chat I've ever dealt with. Very efficient and they answer all questions professionally. You literally made a difference to all car owners chapeau 👏🏼
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
            <h3>Mohamed Essam</h3>
            <h4>Civil engineer</h4>
          </div>


        </div>

      </div>
    </section><!-- End Testimonials Section -->


   
    

   <!-- ======= Pricing Section ======= -->
   <!---- <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pricing</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6" data-aos="zoom-im" data-aos-delay="100">
            <div class="box">
              <h3>Free</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="100">
    <div class="box featured">
      <h3>Business</h3>
      <h4><sup>$</sup>19<span> / month</span></h4>
      <ul>
        <li>Aida dere</li>
        <li>Nec feugiat nisl</li>
        <li>Nulla at volutpat dola</li>
        <li>Pharetra massa</li>
        <li class="na">Massa ultricies mi</li>
      </ul>
      <div class="btn-wrap">
        <a href="#" class="btn-buy">Buy Now</a>
      </div>
    </div>
  </div>

          
          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <h3>Developer</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div>
            <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7290573.081382147!2d26.380291144279877!3d26.844718475551225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14368976c35c36e9%3A0x2c45a00925c4c444!2sEgypt!5e0!3m2!1sen!2sbg!4v1611291481564!5m2!1sen!2sbg" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>Nasr City Abbas El-Akkad</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>saviors@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+01288996784</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
    <!-- ======= Footer ======= -->
    <footer id="footer">
 
 <div class="footer-top">
   <div class="container">
     <div class="row">
 
       <div class="col-lg-4 col-md-6 footer-contact">
       <img src="img/logo.png">
         <p>
           Nasr City Abbas El-Akkad<br><br>
           
           <strong>Phone:</strong> +01288996784<br>
           <strong>Email:</strong> saviors@gmail.com<br>
         </p>
       </div>
 
       <div class="col-lg-4 col-md-6 footer-links">
         <h4>Useful Links</h4>
         <ul>
           <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
           <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
           <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
           <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
           <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
         </ul>
       </div>
 
       <div class="col-lg-4 col-md-6 footer-links">
         <h4>Our Services</h4>
         <ul>
         <li><i class="bx bx-chevron-right"></i> <a href="#">Select Mechanical</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Select Winch</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Sell & Buy Cars</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Sell & Buy Spare Cars</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>

         </ul>
       </div>
 
 
     </div>
   </div>
 </div>
 
 <div class="container d-md-flex py-4">
 
   <div class="mr-md-auto text-center text-md-left">
     <div class="copyright">
       &copy; Copyright <strong><span><img src="img/logo.png" alt=""></span></strong>. All Rights Reserved
     </div>
   </div>
   <div class="social-links text-center text-md-right pt-3 pt-md-0">
     <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
     <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
     <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
     <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
     <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
   </div>
 </div>
 </footer><!-- End Footer -->
 
 <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
 <div id="preloader"></div>




  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>


  <script type="text/javascript" src="assets/js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
 

   </body>
 
 </html>