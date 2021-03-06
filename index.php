<?php
  session_start();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Traversa Adventures</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <script>
          function logout(){
            <?php 
              session_destroy();

            ?>
              location.replace('index.php');

          }
  </script>
      

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.php">Traversa<span>Adventures</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
            <li class="nav-item"><a href="destination.php" class="nav-link">Destination</a></li>
            <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            <li class="nav-item cta"><a href="#" class="nav-link">Book Now</a></li>
            <li class="nav-item"><a href="#" class="nav-link">
              <?php
                if (isset($_SESSION['name'])) {
                  echo "Logged in as : <b>"; echo $_SESSION['name'];
                  echo "</b> <p style='color:red; float:right;' onclick='logout()'>Logout <p>";
                  ?><a href="deleteacc.php?em=$result[email]">Delete Account</a>
                <?php 
                }
                else{
                  echo "<p style='color:red; float:right;'> Not Login Yet...!</p>";
                  
                }
              ?></a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 text text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
              <span class="ion-ios-play"></span>
            </a>
            <p class="caps" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Travel to the any corner of the world, without going around in circles</p>
            <h1 data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Make Your Tour Amazing With Us</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-no-pb ftco-no-pt">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="search-wrap-1 ftco-animate p-4">
              <form action="#" class="search-property-1">
                <div class="row">
                  <div class="col-lg align-items-end">
                    <div class="form-group">
                      <label for="#">Destination</label>
                      <div class="form-field">
                        <div class="icon"><span class="ion-ios-search"></span></div>
                        <input type="text" class="form-control" placeholder="Search place">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg align-items-end">
                    <div class="form-group">
                      <label for="#">Check-in date</label>
                      <div class="form-field">
                        <div class="icon"><span class="ion-ios-calendar"></span></div>
                        <input type="text" class="form-control checkin_date" placeholder="Check In Date">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg align-items-end">
                    <div class="form-group">
                      <label for="#">Check-out date</label>
                      <div class="form-field">
                        <div class="icon"><span class="ion-ios-calendar"></span></div>
                        <input type="text" class="form-control checkout_date" placeholder="Check Out Date">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg align-items-end">
                    <div class="form-group">
                      <label for="#">Price Limit</label>
                      <div class="form-field">
                        <div class="select-wrap">
                          <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                          <select name="" id="" class="form-control">
                            <option value="">Rs.5,000</option>
                            <option value="">Rs.10,000</option>
                            <option value="">Rs.50,000</option>
                            <option value="">Rs.100,000</option>
                            <option value="">Rs.200,000</option>
                            <option value="">Rs.300,000</option>
                            <option value="">Rs.400,000</option>
                            <option value="">Rs.500,000</option>
                            <option value="">Rs.600,000</option>
                            <option value="">Rs.700,000</option>
                            <option value="">Rs.800,000</option>
                            <option value="">Rs.900,000</option>
                            <option value="">Rs.1,000,000</option>
                            <option value="">Rs.2,000,000</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg align-self-end">
                    <div class="form-group">
                      <div class="form-field">
                        <input type="submit" value="Search" class="form-control btn btn-primary">
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate">
            <h2 class="mb-4">It's time to start your adventure</h2>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
            A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="#" class="btn btn-primary py-3 px-4">Search Destination</a></p>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block">
                  <div class="icon"><span class="flaticon-paragliding"></span></div>
                  <div class="media-body">
                    <h3 class="heading mb-3">Activities</h3>
                    <p>A small river named Duden flows by their place and supplies it with the necessary</p>
                  </div>
                </div>      
              </div>
              <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block">
                  <div class="icon"><span class="flaticon-route"></span></div>
                  <div class="media-body">
                    <h3 class="heading mb-3">Travel Arrangements</h3>
                    <p>A small river named Duden flows by their place and supplies it with the necessary</p>
                  </div>
                </div>    
              </div>
              <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block">
                  <div class="icon"><span class="flaticon-tour-guide"></span></div>
                  <div class="media-body">
                    <h3 class="heading mb-3">Private Guide</h3>
                    <p>A small river named Duden flows by their place and supplies it with the necessary</p>
                  </div>
                </div>      
              </div>
              <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block">
                  <div class="icon"><span class="flaticon-map"></span></div>
                  <div class="media-body">
                    <h3 class="heading mb-3">Location Manager</h3>
                    <p>A small river named Duden flows by their place and supplies it with the necessary</p>
                  </div>
                </div>      
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-counter img" id="section-counter">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-6 d-flex">
            <div class="img d-flex align-self-stretch" style="background-image:url(images/about.jpg);"></div>
          </div>
          <div class="col-md-6 pl-md-5 py-5">
            <div class="row justify-content-start pb-3">
              <div class="col-md-12 heading-section ftco-animate">
                <h2 class="mb-4">Make Your Tour Memorable and Safe With Us</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center mb-4">
                  <div class="text">
                    <strong class="number" data-number="300">0</strong>
                    <span>Successful Tours</span>
                  </div>
                </div>
              </div>
              <div class="col-md-4 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center mb-4">
                  <div class="text">
                    <strong class="number" data-number="24000">0</strong>
                    <span>Happy Tourist</span>
                  </div>
                </div>
              </div>
              <div class="col-md-4 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center mb-4">
                  <div class="text">
                    <strong class="number" data-number="200">0</strong>
                    <span>Place Explored</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Best Place Destination</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 ftco-animate">
            <div class="project-destination">
              <a href="#" class="img" style="background-image: url(images/place-1.jpg);">
                <div class="text">
                  <h3>Singapore</h3>
                  <span>8 Tours</span>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <div class="project-destination">
              <a href="#" class="img" style="background-image: url(images/place-2.jpg);">
                <div class="text">
                  <h3>Canada</h3>
                  <span>2 Tours</span>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <div class="project-destination">
              <a href="#" class="img" style="background-image: url(images/place-3.jpg);">
                <div class="text">
                  <h3>Thailand</h3>
                  <span>5 Tours</span>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <div class="project-destination">
              <a href="#" class="img" style="background-image: url(images/place-4.jpg);">
                <div class="text">
                  <h3>Autralia</h3>
                  <span>5 Tours</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pt">
      <div class="container">
        <div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Tour Destination</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="project-wrap">
              <a href="#" class="img" style="background-image: url(images/destination-1.jpg);"></a>
              <div class="text p-4">
                <span class="price">Rs.37,000/person</span>
                <span class="days">8 Days Tour</span>
                <h3><a href="#">Bora-Bora, French-Polynesia</a></h3>
                <p class="location"><span class="ion-ios-map"></span> Matrina </p>
                <ul>
                  <li><span class="flaticon-shower"></span>4</li>
                  <li><span class="flaticon-king-size"></span>4</li>
                  <li><span class="flaticon-mountains"></span>Near Mountain</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="project-wrap">
              <a href="#" class="img" style="background-image: url(images/destination-2.jpg);"></a>
              <div class="text p-4">
                <span class="price">Rs.48,000/person</span>
                <span class="days">10 Days Tour</span>
                <h3><a href="#">Great Barrier Reef,Australia</a></h3>
                <p class="location"><span class="ion-ios-map"></span> Heart Reef</p>
                <ul>
                  <li><span class="flaticon-shower"></span>5</li>
                  <li><span class="flaticon-king-size"></span>5</li>
                  <li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="project-wrap">
              <a href="#" class="img" style="background-image: url(images/destination-3.jpg);"></a>
              <div class="text p-4">
                <span class="price">Rs.35,000/person</span>
                <span class="days">7 Days Tour</span>
                <h3><a href="#">Bali, Indonesia</a></h3>
                <p class="location"><span class="ion-ios-map"></span>Indonesia</p>
                <ul>
                  <li><span class="flaticon-shower"></span>4</li>
                  <li><span class="flaticon-king-size"></span>3</li>
                  <li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-4 ftco-animate">
            <div class="project-wrap">
              <a href="#" class="img" style="background-image: url(images/destination-4.jpg);"></a>
              <div class="text p-4">
                <span class="price">Rs.42,000/person</span>
                <span class="days">8 Days Tour</span>
                <h3><a href="#">Pamukalle,Turkey</a></h3>
                <p class="location"><span class="ion-ios-map"></span>The City Of Minerals</p>
                <ul>
                  <li><span class="flaticon-shower"></span>4</li>
                  <li><span class="flaticon-king-size"></span>4</li>
                  <li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="project-wrap">
              <a href="#" class="img" style="background-image: url(images/destination-5.jpg);"></a>
              <div class="text p-4">
                <span class="price">Rs.30,000/person</span>
                <span class="days">10 Days Tour</span>
                <h3><a href="#">Assam, The Home Of Horned Rhinos</a></h3>
                <p class="location"><span class="ion-ios-map"></span> Assam</p>
                <ul>
                  <li><span class="flaticon-shower"></span>5</li>
                  <li><span class="flaticon-king-size"></span>5</li>
                  <li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="project-wrap">
              <a href="#" class="img" style="background-image: url(images/destination-6.jpg);"></a>
              <div class="text p-4">
                <span class="price">Rs.37,000/person</span>
                <span class="days">7 Days Tour</span>
                <h3><a href="#">Kathmandu, The Capital</a></h3>
                <p class="location"><span class="ion-ios-map"></span> Nepal</p>
                <ul>
                  <li><span class="flaticon-shower"></span>3</li>
                  <li><span class="flaticon-king-size"></span>4</li>
                  <li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section testimony-section bg-bottom" style="background-image: url(images/bg_3.jpg);">
      <div class="container">
        <div class="row justify-content-center pb-4">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-4">Our Team</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">It has been immense pleasure working with TRAVERSA and it has giving me a lot of opportunities to upgrade myself...The only motive of our members is to show how beautiful the world is to the people...</p>
                    <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                      <div class="pl-3">
                        <p class="name">Ankit Gamechi</p>
                        <span class="position">Marketing Manager</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Look deep into nature, and then you will understand everything better...</p>
                    <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                      <div class="pl-3">
                        <p class="name">Ashish Thakor</p>
                        <span class="position">Travel and Guide Manager</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Choose only one master—nature...This is the Quote with which i started working here...</p>
                    <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                      <div class="pl-3">
                        <p class="name">Parth Kakani</p>
                        <span class="position">Hotel and Stay Manager</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">I go to nature to be soothed and healed, and to have my senses put in order...</p>
                    <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url(images/person_4.jpg)"></div>
                      <div class="pl-3">
                        <p class="name">Brijesh Italiya</p>
                        <span class="position">Booking Manager</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Recent Post</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text mt-3 float-right d-block">
                <div class="d-flex align-items-center mb-4 topp">
                  <div class="one">
                    <span class="day">21</span>
                  </div>
                  <div class="two">
                    <span class="yr">2020</span>
                    <span class="mos">August</span>
                  </div>
                </div>
                <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text mt-3 float-right d-block">
                <div class="d-flex align-items-center mb-4 topp">
                  <div class="one">
                    <span class="day">21</span>
                  </div>
                  <div class="two">
                    <span class="yr">2020</span>
                    <span class="mos">August</span>
                  </div>
                </div>
                <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text mt-3 float-right d-block">
                <div class="d-flex align-items-center mb-4 topp">
                  <div class="one">
                    <span class="day">21</span>
                  </div>
                  <div class="two">
                    <span class="yr">2020</span>
                    <span class="mos">August</span>
                  </div>
                </div>
                <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer bg-bottom" style="background-image: url(images/footer-bg.jpg);">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Vacation</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Infromation</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Online Enquiry</a></li>
                <li><a href="#" class="py-2 d-block">General Enquiries</a></li>
                <li><a href="#" class="py-2 d-block">Booking Conditions</a></li>
                <li><a href="#" class="py-2 d-block">Privacy and Policy</a></li>
                <li><a href="#" class="py-2 d-block">Refund Policy</a></li>
                <li><a href="#" class="py-2 d-block">Call Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Experience</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Adventure</a></li>
                <li><a href="#" class="py-2 d-block">Hotel and Restaurant</a></li>
                <li><a href="#" class="py-2 d-block">Beach</a></li>
                <li><a href="#" class="py-2 d-block">Nature</a></li>
                <li><a href="#" class="py-2 d-block">Camping</a></li>
                <li><a href="#" class="py-2 d-block">Party</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">UKA TARSADIA University . Maliba Campus</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@trip.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </footer>
    
  

 


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>