<?php
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate form fields
    if (empty($name)) {
        $errors[] = 'Name is empty';
    }

    if (empty($email)) {
        $errors[] = 'Email is empty';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is invalid';
    }

    if (empty($message)) {
        $errors[] = 'Message is empty';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<!--Grp 13-->
<!-- Mirrored from demos.codexcoder.com/labartisan/html/GreenForest/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Oct 2023 19:19:11 GMT -->

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>WWP</title>
  <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico" />
  <!-- Plugin css -->
  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css" media="all" />
  <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon.css" media="all" />
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="all" />
  <link rel="stylesheet" type="text/css" href="assets/css/animate.css" media="all" />
  <link rel="stylesheet" type="text/css" href="assets/css/swiper.min.css" media="all" />
  <link rel="stylesheet" type="text/css" href="assets/css/lightcase.css" media="all" />
  <link rel="stylesheet" type="text/css" href="assets/css/jquery.nstSlider.css" media="all" />
  <link rel="stylesheet" type="text/css" href="assets/css/flexslider.css" media="all" />

  <!-- own style css -->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all" />
  <link rel="stylesheet" type="text/css" href="assets/css/rtl.css" media="all" />
  <link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="all" />
</head>

<body >
  <!-- Start Pre-Loader-->
  <!--
  <div id="loading">
    <div id="loading-center">
      <div id="loading-center-absolute">
        <div class="object" id="object_one"></div>
        <div class="object" id="object_two"></div>
        <div class="object" id="object_three"></div>
        <div class="object" id="object_four"></div>
      </div>
    </div>
  </div>-->
  <!-- Start Pre-Loader -->

  <div class="box-layout">
    <!-- End Pre-Loader -->
    <header class="header-style-2">
      <div class="bg-header-top">
        <div class="container">
          <div class="row">
            <div class="header-top">
              <ul class="h-contact">
                <li>
                  <i class="flaticon-time-left"></i> Time : Tusday-Monday :
                  9:00am-5:00pm
                </li>
                <li>
                  <i class="flaticon-vibrating-phone"></i> Phone : +216 25 158
                  744
                </li>
                <li>
                  <i class="flaticon-placeholder"></i> Address : Monastir
                </li>
              </ul>
              <div class="donate-option">
                <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Shop now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- .bg-header-top -->
      <!-- Start Menu -->
      <div class="bg-main-menu menu-scroll">
        <div class="container">
          <div class="row">
            <div class="main-menu">
              <div class="main-menu-bottom">
                <div class="navbar-header">
                  <a class="navbar-brand" href="#"><img style="width: 34%; padding-top: 10px" src="assets/images/imagesme/logo-removebg-preview.png" alt="logo" class="img-responsive" /></a>

                </div>
                <div class="main-menu-area">
                  <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1">
                    <ul>
                      <li>
                        <a href="#" class="active">HOME</a>
                      </li>
                      <li><a href="#AboutUs">About Us</a></li>
                      <li><a href="#Project">Our project</a></li>
                      <li><a href="#whatwedo">What We Do</a></li>
                      <li><a href="#blog">Blog</a></li>

                      <li>
                        <a>pages</a>
                        <ul class="sub-menu">
                          <li>
                            <a href="#diyVideo"><i class="fa fa-angle-double-right" aria-hidden="true"></i>
                              DIY</a>
                          </li>
                          <li>
                            <a href="#Collection"><i class="fa fa-angle-double-right" aria-hidden="true"></i>
                              ECO BAG COLLECTION</a>
                          </li>
                          <li>
                            <a href="#events"><i class="fa fa-angle-double-right" aria-hidden="true"></i>
                              EVENTS</a>
                          <li>
                            <a href="#sponsor"><i class="fa fa-angle-double-right" aria-hidden="true"></i>
                              SPONSORS</a>
                          </li>


                      </li>

                    </ul>
                    </li>



                    <li><a href="#contact">contact Us</a></li>
                    <li>
                      <a href="register.html">Login/Register</a>
                    </li>
                    </ul>
                    <div class="menu-right-option pull-right">
                      <div class="cart-option">
                        <div class="cart-icon">
                          <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                          <div class="count-cart">2</div>
                        </div>
                        <!-- .cart-icon -->
                        <div class="cart-dropdown-menu">
                          <div class="cart-items">
                            <div class="cart-img">
                              <a href="#"><img src="assets/images/imagesme/60183432.jpg" alt="cart-img-1" width="1%" /></a>
                            </div>
                            <div class="cart-content">
                              <h6><a href="#">Bag 1</a></h6>
                              <p>1*<span>50DT</span></p>
                            </div>
                            <div class="cart-btn">
                              <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                              <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
                            </div>
                            <div class="clr"></div>
                          </div>
                          <!-- .cart-items -->

                          <div class="cart-items">
                            <div class="cart-img">
                              <a href="#"><img src="assets/images/imagesme/assortment-eco-friendly-utensils.jpg" alt="cart-img-2" /></a>
                            </div>
                            <div class="cart-content">
                              <h6><a href="#">Bag 2</a></h6>
                              <p>1*<span>70DT</span></p>
                            </div>
                            <div class="cart-btn">
                              <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                              <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
                            </div>
                            <div class="clr"></div>
                          </div>
                          <!-- .cart-items -->
                          <div class="cart-items">
                            <div class="cart-img">
                              <a href="#"><img src="assets/images/imagesme/ecological-bag-grass.jpg" alt="cart-img-3" /></a>
                            </div>
                            <div class="cart-content">
                              <h6><a href="#">Bag 3</a></h6>
                              <p>1*<span>40DT</span></p>
                            </div>
                            <div class="cart-btn">
                              <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                              <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
                            </div>
                            <div class="clr"></div>
                          </div>
                          <!-- .cart-items -->
                          <div class="total-price">
                            <p><span>Total Price :</span> 160DT</p>
                          </div>
                          <!-- .total-prices -->
                          <div class="checkout-btn">
                            <a href="#" class="btn btn-default">Shop now</a>
                          </div>
                        </div>
                        <!-- .cart--->
                      </div>
                      <!-- .cart-option -->

                      <div class="search-box">
                        <i class="fa fa-search first_click" aria-hidden="true" style="display: block"></i>
                        <i class="fa fa-times second_click" aria-hidden="true" style="display: none"></i>
                      </div>
                      <div class="search-box-text">
                        <form action="#">
                          <input type="text" name="search" id="all-search" placeholder="Search Here" />
                        </form>
                      </div>
                    </div>
                    <!-- .header-search-box -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Start Slider Section -->
    <section class="bg-slider-option">
      <div class="slider-option slider-two">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
              <div class="slider-item">
                <img src="assets/images/imagesme/sac-pour-copie-feuille.jpg" alt="bg-slider-2" />
                <div class="slider-content-area">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-6" width="0%">
                        <div class="slider-content">
                          <h3>welcome to Waste Wise Plastic</h3>
                          <h2>Eco Bags</h2>
                          <p>
                            Your Sustainable Choice for a Cleaner Tomorrow
                          </p>
                          <div class="slider-btn">
                            <a href="register.html" class="btn btn-default">Register</a>
                            <a href="#" class="btn btn-default">Shop Now</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <div class="slider-item">
                <img src="assets/images/imagesme/ecological-bag-grass.jpg" alt="bg-slider-2" />
                <div class="slider-content-area">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-6"></div>
                      <div class="col-md-6">
                        <div class="slider-content">
                          <h3 style="padding-bottom: 0px; padding-top: 0px">
                            Small Business
                          </h3>
                          <br />
                          <h3>Eco Bags</h3>
                          <h2>A Step Towards a Greener Future</h2>
                          <div class="slider-btn">
                            <a href="register.html" class="btn btn-default">Register</a>
                            <a href="#" class="btn btn-default">Shop Now</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="slider-item">
                <img src="assets/images/imagesme/guus-baggermans-fbDPzqOXwuY-unsplash.jpg" alt="bg-slider-2" />
                <div class="slider-content-area">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-6"></div>
                      <div class="col-md-6">
                        <div class="slider-content">
                          <p>Eco Bags</p>
                          <p>Local Business, Global Impact</p>
                          <div class="slider-btn">
                            <a href="register.html" class="btn btn-default">Register</a>
                            <a href="#" class="btn btn-default">Shop now</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button class="left carousel-control carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="right carousel-control carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>
    <!-- End Slider Section -->

    <!-- Start About Greenforest Section -->
    <section style="background-color: #f7f1e5" class="bg-about-greenforest" id="AboutUs">
      <div class="container">
        <div class="row">
          <div class="about-greenforest">
            <div class="row">
              <div class="col-lg-8">
                <div class="about-greenforest-content">
                  <p style="font-size: 40px; color: black">
                    Welcome to
                    <strong style="color: #40513b">Waste Wise Plastic</strong>
                  </p>
                  <p>
                    <span>"Waste Wise Plastic" is an innovative project dedicated
                      to addressing the critical issue of plastic waste in our
                      environment.</span>
                  </p>
                  <h6>
                    It aims to promote environmental sustainability while
                    providing support and opportunities for small businesses
                    specializing in eco-friendly bags.
                  </h6>
                  <p>
                    We invite you to join our cause and participate in the
                    movement to become "Waste Wise." Together, we can work
                    towards a more sustainable and cleaner future. Whether
                    you're an individual, a community organization, or a
                    business, there are various ways to get involved and make
                    a positive impact.
                  </p>
                  <a href="#" class="btn btn-default">join now</a>
                  <a href="#" class="btn btn-default">Shop now</a>
                </div>
                <!-- .about-greenforest-content -->
              </div>
              <!-- .col-lg-8 -->
              <div class="col-lg-4">
                <div class="about-greenforest-img">
                  <img style="
                        border-top-left-radius: 50% 50%;
                        width: 70%;
                        margin-left: 100px;
                      " src="assets/images/imagesme/Screenshot 2023-10-15 215521.png" alt="about-greenforet-img" class="img-responsive" />
                </div>
                <!-- .about-greenforest-img -->
              </div>
              <!-- .col-md-4 -->
            </div>
          </div>
          <!-- .about-greenforest -->
        </div>
        <!-- .row -->
      </div>
      <!-- .container -->
    </section>
    <!-- End About Greenforest Section -->

    <!-- Start Count Section -->
    <section class="bg-count2-section">
      <div class="count-overlay">
        <div class="container">
          <div class="row">
            <div class="count-option">
              <div class="row">

                <h3 class="mission">Our mission is to champion environmental sustainability while fostering the
                  growth of small businesses dedicated to producing eco-friendly bags.</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Count Section -->

    <!-- Start Recent Project Section -->
    <section class="bg-recent-project" id="Project">
      <div class="container">
        <div class="row">
          <div class="recent-project">
            <div class="section-header">
              <h2>recent project</h2>
              <h3>Build Things That Matter</h3>
            </div>
            <!-- .section-header -->

            <div id="filters" class="button-group">
              <button class="button is-checked" data-filter="*">
                show all
              </button>
              <button class="button" data-filter=".cat-1">environment</button>
              <button class="button" data-filter=".cat-2">recycling</button>
              <!--<button class="button" data-filter=".cat-3">ecology</button>-->
              <button class="button" data-filter=".cat-4">climate</button>
            </div>
            <div class="portfolio-items">
              <div class="item cat-1" data-category="transition">
                <div class="item-inner">
                  <div class="portfolio-img">
                    <div class="overlay-project"></div>
                    <!-- .overlay-project -->
                    <img src="assets/images/imagesme/yue-iris-TYvgqvcnpRs-unsplash.jpg" alt="recent-project-img-1" />
                    <ul class="project-link-option">
                      <li class="project-link">
                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                      </li>
                      <li class="project-search">
                        <a href="assets/images/imagesme/yue-iris-TYvgqvcnpRs-unsplash.jpg" data-rel="lightcase"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                      </li>
                    </ul>
                  </div>
                  <!-- /.portfolio-img -->
                  <div class="recent-project-content">
                    <h4><a href="#">Eco Bag Design Competitions</a></h4>
                    <p>
                      By : <span><a href="#">Admin</a></span>
                    </p>
                  </div>
                  <!-- .latest-port-content -->
                </div>
                <!-- .item-inner -->
              </div>
              <!-- .items -->

              <div class="item cat-2" data-category="metalloid">
                <div class="item-inner">
                  <div class="portfolio-img">
                    <div class="overlay-project"></div>
                    <!-- .overlay-project -->
                    <img src="assets/images/imagesme/kenny-eliason-1-aA2Fadydc-unsplash.jpg" alt="recent-project-img-2" />
                    <ul class="project-link-option">
                      <li class="project-link">
                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                      </li>
                      <li class="project-search">
                        <a href="assets/images/imagesme/kenny-eliason-1-aA2Fadydc-unsplash.jpg" data-rel="lightcase:myCollection"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                      </li>
                    </ul>
                  </div>
                  <!-- /.portfolio-img -->
                  <div class="recent-project-content">
                    <h4><a href="#">Recycling Education and Awareness</a></h4>
                    <p>
                      By : <span><a href="#">Admin</a></span>
                    </p>
                  </div>
                  <!-- .latest-port-content -->
                </div>
                <!-- .item-inner -->
              </div>
              <!-- .items -->

              <!--
                            <div class="item cat-3 " data-category="post-transition">
                                <div class="item-inner">
                                    <div class="portfolio-img">
                                        <div class="overlay-project"></div>
                                       
                                        <img src="assets/images/home02/recent-project-img-3.jpg" alt="recent-project-img-3">
                                        <ul class="project-link-option">
                                            <li class="project-link"><a href="project_single.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                            <li class="project-search"><a href="assets/images/home02/recent-project-img-3.jpg" data-rel="lightcase:myCollection"><i class="fa fa-search-plus" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                  
                                    <div class="recent-project-content">
                                        <h4><a href="project_single.html">Need Solar Panels</a></h4>
                                        <p>By : <span><a href="#">Admin</a></span></p>
                                    </div>
                                    
                                </div>
                               
                            </div>
                             -->

              <div class="item cat-2" data-category="post-transition">
                <div class="item-inner">
                  <div class="portfolio-img">
                    <div class="overlay-project"></div>
                    <!-- .overlay-project -->
                    <img src="assets/images/imagesme/actionvance-fIC7qz4HNqI-unsplash.jpg" alt="recent-project-img-4" />
                    <ul class="project-link-option">
                      <li class="project-link">
                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                      </li>
                      <li class="project-search">
                        <a href="assets/images/imagesme/actionvance-fIC7qz4HNqI-unsplash.jpg" data-rel="lightcase:myCollection"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                      </li>
                    </ul>
                  </div>
                  <!-- /.portfolio-img -->
                  <div class="recent-project-content">
                    <h4><a href="#">Circular Economy Initiatives</a></h4>
                    <p>
                      By : <span><a href="#">Admin</a></span>
                    </p>
                  </div>
                  <!-- .latest-port-content -->
                </div>
                <!-- .item-inner -->
              </div>
              <!-- .items -->
              <div class="item cat-4" data-category="transition">
                <div class="item-inner">
                  <div class="portfolio-img">
                    <div class="overlay-project"></div>
                    <!-- .overlay-project -->
                    <img src="assets/images/imagesme/markus-spiske-Teyrhlv0jbA-unsplash.jpg" alt="recent-project-img-5" />
                    <ul class="project-link-option">
                      <li class="project-link">
                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                      </li>
                      <li class="project-search">
                        <a href="assets/images/imagesme/markus-spiske-Teyrhlv0jbA-unsplash.jpg" data-rel="lightcase:myCollection"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                      </li>
                    </ul>
                  </div>
                  <!-- /.portfolio-img -->
                  <div class="recent-project-content">
                    <h4><a href="#">Reduction of Single-Use Plastics</a></h4>
                    <p>
                      By : <span><a href="#">Admin</a></span>
                    </p>
                  </div>
                  <!-- .latest-port-content -->
                </div>
                <!-- .item-inner -->
              </div>
              <!-- .items -->
              <div class="item cat-1" data-category="alkali">
                <div class="item-inner">
                  <div class="portfolio-img">
                    <div class="overlay-project"></div>
                    <!-- .overlay-project -->
                    <img src="assets/images/imagesme/maria-lin-kim-8RaUEd8zD-U-unsplash.jpg" alt="recent-project-img-6" />
                    <ul class="project-link-option">
                      <li class="project-link">
                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                      </li>
                      <li class="project-search">
                        <a href="assets/images/imagesme/maria-lin-kim-8RaUEd8zD-U-unsplash.jpg" data-rel="lightcase:myCollection"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                      </li>
                    </ul>
                  </div>
                  <!-- /.portfolio-img -->
                  <div class="recent-project-content">
                    <h4><a href="#">Plastic Bag Bans and Regulations</a></h4>
                    <p>
                      By : <span><a href="#">Admin</a></span>
                    </p>
                  </div>
                  <!-- .latest-port-content -->
                </div>
                <!-- .item-inner -->
              </div>
              <!-- .items -->
            </div>
            <!-- .isotope-items -->
          </div>
          <!-- .recent-project -->
        </div>
        <!-- .row -->
      </div>
      <!-- .container -->
    </section>
    <!-- End Recent Project Section -->

    <!-- Start Service Style2 Section -->
    <section class="bg-servicesstyle2-section" id="whatwedo">
      <div class="container">
        <div class="row">
          <div class="our-services-option">
            <div class="section-header">
              <h2>what we do</h2>
              <p>
                <strong>Our mission</strong> is to reduce single-use plastic
                waste and promote eco-conscious living through sustainable,
                reusable bags
              </p>
            </div>
            <!-- .section-header -->
            <div class="row">
              <div class="col-lg-4 col-sm-6 col-12">
                <div class="our-services-box">
                  <div class="our-services-items">
                    <i class="flaticon-greenhouse"></i>
                    <div class="our-services-content">
                      <h4>
                        <a href="#">Eco-Friendly Product Offerings</a>
                      </h4>
                      <p>
                        Credibly utcost efective an expertise and web enabled
                        proces that improvements Completely seamless channels
                      </p>
                      <a href="#">read more<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </div>
                    <!-- .our-services-content -->
                  </div>
                  <!-- .our-services-items -->
                </div>
                <!-- .our-services-box -->
              </div>
              <!-- .col-md-4 -->
              <div class="col-lg-4 col-sm-6 col-12">
                <div class="our-services-box">
                  <div class="our-services-items">
                    <i class="flaticon-technology"></i>
                    <div class="our-services-content">
                      <h4>
                        <a href="#">Quality and Durability</a>
                      </h4>
                      <p>
                        Credibly utcost efective an expertise and web enabled
                        proces that improvements Completely seamless channels
                      </p>
                      <a href="#">read more<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </div>
                    <!-- .our-services-content -->
                  </div>
                  <!-- .our-services-items -->
                </div>
                <!-- .our-services-box -->
              </div>
              <!-- .col-md-4 -->
              <div class="col-lg-4 col-sm-6 col-12">
                <div class="our-services-box">
                  <div class="our-services-items">
                    <i class="flaticon-light-bulb"></i>
                    <div class="our-services-content">
                      <h4>
                        <a href="#">Educational Resources</a>
                      </h4>
                      <p>
                        Credibly utcost efective an expertise and web enabled
                        proces that improvements Completely seamless channels
                      </p>
                      <a href="#">read more<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </div>
                    <!-- .our-services-content -->
                  </div>
                  <!-- .our-services-items -->
                </div>
                <!-- .our-services-box -->
              </div>
              <!-- .col-md-4 -->
              <div class="col-lg-4 col-sm-6 col-12">
                <div class="our-services-box">
                  <div class="our-services-items">
                    <i class="flaticon-recycling-symbol"></i>
                    <div class="our-services-content">
                      <h4><a href="#">Recycling</a></h4>
                      <p>
                        Credibly utcost efective an expertise and web enabled
                        proces that improvements Completely seamless channels
                      </p>
                      <a href="#">read more<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </div>
                    <!-- .our-services-content -->
                  </div>
                  <!-- .our-services-items -->
                </div>
                <!-- .our-services-box -->
              </div>
              <!-- .col-md-4 -->
              <div class="col-lg-4 col-sm-6 col-12">
                <div class="our-services-box">
                  <div class="our-services-items">
                    <i class="flaticon-sprout"></i>
                    <div class="our-services-content">
                      <h4>
                        <a href="#">Environmental Impact</a>
                      </h4>
                      <p>
                        Credibly utcost efective an expertise and web enabled
                        proces that improvements Completely seamless channels
                      </p>
                      <a href="#">read more<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </div>
                    <!-- .our-services-content -->
                  </div>
                  <!-- .our-services-items -->
                </div>
                <!-- .our-services-box -->
              </div>
              <!-- .col-md-4 -->
              <div class="col-lg-4 col-sm-6 col-12">
                <div class="our-services-box">
                  <div class="our-services-items">
                    <i class="flaticon-droplet"></i>

                    <div class="our-services-content">
                      <h4>
                        <a href="#">Community and Social Initiatives</a>
                      </h4>
                      <p>
                        Credibly utcost efective an expertise and web enabled
                        proces that improvements Completely seamless channels
                      </p>
                      <a href="#">read more<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </div>
                    <!-- .our-services-content -->
                  </div>
                  <!-- .our-services-items -->
                </div>
                <!-- .our-services-box -->
              </div>
              <!-- .col-md-4 -->
            </div>
            <!-- .row -->
          </div>
          <!-- .our-services-option -->
        </div>
        <!-- .row -->
      </div>
      <!-- .container -->
    </section>
    <!-- End Service Style2 Section -->

    <!-- Start BLOG Section -->
    <section class="bg-focus-cause-section2" id="blog">
      <div class="container">
        <div class="row">
          <div class="focus-cause">
            <div class="section-header">
              <h2>Our Blog</h2>
              <p>
                All the information and inspiration you need to revolutionise
                the way you spend, save and live.
              </p>
            </div>

            <div style="padding-bottom: 40px" class="recent-project">
              <div id="filters" class="button-group">
                <button class="button is-checked" data-filter="*">
                  show all
                </button>
                <button class="button" data-filter=".cat-1">
                  Planet Earth
                </button>
                <button class="button" data-filter=".cat-2">
                  recycling & waste
                </button>
                <button class="button" data-filter=".cat-3">ecology</button>
              </div>
            </div>
            <!-- .section-header -->
            <div class="row">
              <div class="col-lg-4 col-sm-6 col-12">
                <div class="cause-items">
                  <a href="#"><img src="assets/images/imagesme/residential-shaded-sidewalk-with-green-trees-in-evanston-illinois-1173452575-26ea0ae3b5b1468893f2e3856c815d58.webp" alt="cause-img-1" class="img-responsive" /></a>
                  <div class="cause-content">
                    <!-- .progress -->
                    <h4>
                      <a href="#">Trees Are a Cool Solution in the Heat of the
                        Moment</a>
                    </h4>
                    <p>
                      Trees can help reduce the risk of heat-related illness
                      and, in some cases, save lives.
                    </p>
                    <a href="https://www.treehugger.com/trees-cool-solution-in-heat-of-the-moment-7563346" class="btn btn-default">Read Now</a>
                  </div>
                  <!-- .cause-content -->
                </div>
                <!-- .cause-items -->
              </div>
              <!-- .col-md-4 -->
              <div class="col-lg-4 col-sm-6 col-12">
                <div class="cause-items">
                  <a href="#"><img src="assets/images/imagesme/river-running-through-lush-green-forest-in-rain--yakushima-island--japan-994856780-fc96895ad2af4ba4b190606ce3a07c2c.webp" alt="cause-img-2" class="img-responsive" /></a>
                  <div class="cause-content">
                    <h4>
                      <a href="#">50 Hours of Nature Sounds to Bring You Calm and Joy
                      </a>
                    </h4>
                    <p>
                      BBC Earth created five 10-hour "visual soundscape"
                      videos after researchers found that nature footage
                      boosts bliss.
                    </p>
                    <a href="https://www.treehugger.com/50-hours-nature-sounds-calm-joy-7500244" class="btn btn-default">Read Now</a>
                  </div>
                  <!-- .cause-content -->
                </div>
                <!-- .cause-items -->
              </div>
              <!-- .col-md-4 -->
              <div class="col-lg-4 col-sm-6 col-12">
                <div class="cause-items">
                  <a href="#"><img src="assets/images/imagesme/__opt__aboutcom__coeus__resources__content_migration__treehugger__images__2015__04__earth-facts-a558b5e1111f43eb9a3fffed1371ab66.webp" alt="cause-img-3" class="img-responsive" /></a>
                  <div class="cause-content">
                    <h4>
                      <a href="#">13 Exquisitely Extreme Things About Planet Earth
                      </a>
                    </h4>
                    <p>
                      In celebration of Earth Day: An ode to our awesome orb.
                    </p>
                    <a href="https://www.treehugger.com/wild-things-know-about-planet-earth-4854769" class="btn btn-default">Read Now</a>
                  </div>
                  <!-- .cause-content -->
                </div>
                <!-- .cause-items -->
              </div>
              <!-- .col-md-4 -->
            </div>
            <!-- .row -->
          </div>
          <!-- .focus-cause -->
        </div>
        <!-- .row -->
      </div>
      <!-- .container -->
    </section>
    <!-- End BLOG Section -->

    <!-- Start campaian video Section -->
    <section class="bg-compaian-video" id="diyVideo">
      <div class="compaian-video-overlay">
        <div class="container">
          <div class="row">
            <div class="compaian-video">
              <a href="https://www.youtube.com/embed/tfZ0GwIJdMA?si=aAdrAjrvo_hYceRy" data-rel="lightcase:myCollection"><img src="assets/images/home02/video-icon.png" alt="video-icon" /></a>
              <h3>DIY foldable shopping bag</h3>
            </div>
            <!-- .compaian-video -->
          </div>
          <!-- .row -->
        </div>
        <!-- .container -->
      </div>
      <!-- .compaian-video-overlay -->
    </section>
    <!-- End campaian video Section -->

    <!-- Start Collection Se Section -->
    <section class="bg-collection-section" id="Collection">
      <div class="container">
        <div class="row">
          <div class="collection-option">
            <div class="section-header">
              <h2>Discover Our New Eco Bag Collection</h2>
              <p>
                We are thrilled to introduce our newest collection of eco
                bags, designed with both style and sustainability in mind
              </p>
            </div>
            <!-- .section-header -->
            <div class="row">
              <div class="col-lg-3 col-sm-6 col-12">
                <div class="collection-items">
                  <div class="collection-img">
                    <div class="collection-overlay"></div>
                    <img src="assets/images/imagesme/assortment-eco-friendly-utensils.jpg" alt="collection-img-1" />
                    <ul class="collection-icon">
                      <li>
                        <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                      </li>
                      <li>
                        <a href="assets/images/imagesme/assortment-eco-friendly-utensils.jpg" data-rel="lightcase:myCollection"><i class="fa fa-search" aria-hidden="true"></i></a>
                      </li>
                    </ul>
                  </div>
                  <!-- .collection-img -->
                  <div class="collection-content">
                    <h4><a href="#">Product Text Here</a></h4>
                    <h5>$150.00</h5>
                    <ul class="star-icon">
                      <li>
                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      </li>
                    </ul>
                  </div>
                  <!-- .collection-content -->
                </div>
                <!-- .collection-items -->
              </div>
              <!-- .col-lg-3 -->
              <div class="col-lg-3 col-sm-6 col-12">
                <div class="collection-items">
                  <div class="collection-img">
                    <div class="collection-overlay"></div>
                    <img src="assets/images/imagesme/person-having-sustainable-lifestyle.jpg" alt="collection-img-2" />
                    <ul class="collection-icon">
                      <li>
                        <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                      </li>
                      <li>
                        <a href="assets/images/imagesme/person-having-sustainable-lifestyle.jpg" data-rel="lightcase:myCollection"><i class="fa fa-search" aria-hidden="true"></i></a>
                      </li>
                    </ul>
                  </div>
                  <!-- .collection-img -->
                  <div class="collection-content">
                    <h4><a href="#">Product Text Here</a></h4>
                    <h5>$150.00</h5>
                    <ul class="star-icon">
                      <li>
                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      </li>
                    </ul>
                  </div>
                  <!-- .collection-content -->
                </div>
                <!-- .collection-items -->
              </div>
              <!-- .col-lg-3 -->
              <div class="col-lg-3 col-sm-6 col-12">
                <div class="collection-items">
                  <div class="collection-img">
                    <div class="collection-overlay"></div>
                    <img src="assets/images/imagesme/angelina-yan-rVdLmULqVTQ-unsplash.jpg" alt="collection-img-3" />
                    <ul class="collection-icon">
                      <li>
                        <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                      </li>
                      <li>
                        <a href="assets/images/imagesme/angelina-yan-rVdLmULqVTQ-unsplash.jpg" data-rel="lightcase:myCollection"><i class="fa fa-search" aria-hidden="true"></i></a>
                      </li>
                    </ul>
                  </div>
                  <!-- .collection-img -->
                  <div class="collection-content">
                    <h4><a href="#">Product Text Here</a></h4>
                    <h5>$150.00</h5>
                    <ul class="star-icon">
                      <li>
                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      </li>
                    </ul>
                  </div>
                  <!-- .collection-content -->
                </div>
                <!-- .collection-items -->
              </div>
              <!-- .col-lg-3 -->
              <div class="col-lg-3 col-sm-6 col-12">
                <div class="collection-items">
                  <div class="collection-img">
                    <div class="collection-overlay"></div>
                    <img src="assets/images/imagesme/kelly-sikkema-1Pgq9ZpIatI-unsplash.jpg" alt="collection-img-4" />
                    <ul class="collection-icon">
                      <li>
                        <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                      </li>
                      <li>
                        <a href="assets/images/imagesme/kelly-sikkema-1Pgq9ZpIatI-unsplash.jpg" data-rel="lightcase:myCollection"><i class="fa fa-search" aria-hidden="true"></i></a>
                      </li>
                    </ul>
                  </div>
                  <!-- .collection-img -->
                  <div class="collection-content">
                    <h4><a href="#">Product Text Here</a></h4>
                    <h5>$150.00</h5>
                    <ul class="star-icon">
                      <li>
                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                      </li>
                    </ul>
                  </div>
                  <!-- .collection-content -->
                </div>
                <!-- .collection-items -->
              </div>
              <!-- .col-lg-3 -->
            </div>
            <!-- .row -->
          </div>
          <!-- .collection-option -->
        </div>
        <!-- .row -->
      </div>
      <!-- .container -->
    </section>
    <!-- End Collection Section -->

    <!-- Start Upcoming Events Section -->
    <section class="bg-upcoming-events" id="events">
      <div class="container">
        <div class="row">
          <div class="upcoming-events">
            <div class="section-header">
              <h2>upcoming events</h2>
              <p>
                Welcome to our exciting lineup of upcoming events! Join us
              </p>
            </div>
            <!-- .section-header -->
            <div class="row">
              <div class="col-lg-6">
                <div class="event-items">
                  <div class="event-img">
                    <a href="#"><img src="assets/images/imagesme/close-up-sustainable-shopping-bag-alternatives.jpg" alt="upcoming-events-img-1" class="img-responsive" /></a>
                    <div class="date-box">
                      <h3>24</h3>
                      <h5>july</h5>
                    </div>
                    <!-- .date-box -->
                  </div>
                  <!-- .event-img -->
                  <div class="events-content">
                    <h3>
                      <a href="#">Sustainability Workshop</a>
                    </h3>
                    <ul class="meta-post">
                      <li>
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        8:30am - 5:30pm
                      </li>
                      <li><i class="flaticon-placeholder"></i> Monastir</li>
                    </ul>
                    <p>
                      A hands-on workshop on sustainable living practices,
                      including composting, energy conservation, and
                      eco-friendly gardening. Let's work together for a
                      greener future.
                    </p>
                    <a href="#" class="btn btn-default">join now</a>
                  </div>
                  <!-- .events-content -->
                </div>
                <!-- .events-items -->
              </div>
              <!-- .col-lg-6 -->
              <div class="col-lg-6">
                <div class="event-items">
                  <div class="event-img">
                    <a href="#"><img src="assets/images/imagesme/agrrro-organic-vArBGqX_EtY-unsplash.jpg" alt="upcoming-events-img-2" class="img-responsive" /></a>
                    <div class="date-box">
                      <h3>29</h3>
                      <h5>july</h5>
                    </div>
                    <!-- .date-box -->
                  </div>
                  <!-- .event-img -->
                  <div class="events-content">
                    <h3><a href="#">Eco Bag Emporium</a></h3>
                    <ul class="meta-post">
                      <li>
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        8:30am - 5:30pm
                      </li>
                      <li><i class="flaticon-placeholder"></i> Mahdia</li>
                    </ul>
                    <p>
                      We offer a diverse range of eco-friendly bags, including
                      reusable shopping bags, stylish tote bags, produce bags,
                      and more.
                    </p>
                    <a href="#" class="btn btn-default">join now</a>
                  </div>
                  <!-- .events-content -->
                </div>
                <!-- .events-items -->
              </div>
              <!-- .col-lg-6 -->
            </div>
            <!-- .row -->
          </div>
          <!-- .upcoming-events -->
        </div>
        <!-- .row -->
      </div>
      <!-- .container -->
    </section>
    <!-- End Upcoming Events Section -->

    <!-- Start Sponsors Section -->
    <section class="bg-sponsors-section" id="sponsor">
      <div class="container">
        <div class="row">
          <div class="sponsors-option">
            <div class="section-header">
              <h2>Meet our Sponsors</h2>
              <p>
                We extend our heartfelt gratitude to our top sponsors, whose
                unwavering support plays a crucial role in realizing our
                mission
              </p>
            </div>
            <!-- .section-header -->
            <div class="sponsors-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="sopnsors-items">
                    <a href="https://aziza.tn/fr/home"><img src="assets/images/imagesme/download.png" alt="sponsors-img-1" class="img-responsive" /></a>
                  </div>
                  <!-- .sponsors-items -->
                </div>
                <!-- .swiper-slide -->
                <div class="swiper-slide">
                  <div class="sopnsors-items">
                    <a href="https://mg.tn/"><img style="height: 265px" src="assets/images/imagesme/download.jpg" alt="sponsors-img-2" class="img-responsive" /></a>
                  </div>
                  <!-- .sponsors-items -->
                </div>
                <!-- .swiper-slide -->
                <div class="swiper-slide">
                  <div class="sopnsors-items">
                    <a href="https://www.monoprix.tn/"><img src="assets/images/imagesme/mono.png" alt="sponsors-img-3" class="img-responsive" /></a>
                  </div>
                  <!-- .sponsors-items -->
                </div>
                <!-- .swiper-slide -->
                <div class="swiper-slide">
                  <div class="sopnsors-items">
                    <a href="https://www.facebook.com/Magasin4Prix/?locale=fr_FR"><img src="assets/images/imagesme/4prix.png" alt="sponsors-img-4" class="img-responsive" /></a>
                  </div>
                  <!-- .sponsors-items -->
                </div>
                <!-- .swiper-slide -->
                <div class="swiper-slide">
                  <div class="sopnsors-items">
                    <a href="#"><img src="assets/images/home01/sponsors-img-1.jpg" alt="sponsors-img-1" class="img-responsive" /></a>
                  </div>
                  <!-- .sponsors-items -->
                </div>

                <!-- .swiper-slide -->
              </div>
              <!-- .swiper-wrapper -->
            </div>
            <!-- .sponsors-container -->
          </div>
          <!-- .sponsors-option -->
        </div>
        <!-- .row -->
      </div>
      <!-- .container -->
    </section>
    <!-- End Sponsors Section -->

    <!-- Begin contact us-->
    <section class="bg-contact-us" id="contact">
      <div class="container">
        <div class="row">
          <div class="contact-us">
            <div class="row">
              <div class="col-lg-8" id="error-section">

                <h3 class="contact-title" >Get in Touch</h3>
                <form action="contact.php" method="POST" class="contact-form">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" class="form-control" id="nameId" name="name" placeholder="Full Name" />
                        <?php if (!empty($errors) && in_array('Name is empty', $errors)) {
                          echo "<p style='color: #d9534f; background-color: #f2dede; border: 1px solid #ebccd1; padding: 10px; border-radius: 5px;margin-bottom: 8px;'>Name is required</p>";
                        } ?>
                      </div>
                      <!-- .form-group -->
                    </div>
                    <!-- .col-md-6 -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <input  type="email" class="form-control" id="emailId" name="email" placeholder="Email Address" />
                        <?php
                        if (!empty($errors)) {
                          if (in_array('Email is empty', $errors)) {
                            echo "<p style='color: #d9534f; background-color: #f2dede; border: 1px solid #ebccd1; padding: 10px; border-radius: 5px;margin-bottom: 8px;'>Email is required</p>";
                          } else if (in_array('Email is invalid', $errors)) {
                            echo "<p style='color: #d9534f; background-color: #f2dede; border: 1px solid #ebccd1; padding: 10px; border-radius: 5px;margin-bottom: 8px;'>Invalid email format</p>";
                          }
                        }
                        ?>
                      </div>
                    </div>
                    <!-- .col-md-6 -->
                  </div>
                  <!-- .row -->
                  <div class="form-group">
                    <input type="text" class="form-control" id="subjectId" name="subject" placeholder="Subject" />
                  </div>
                  <textarea id="messageId" class="form-control text-area" rows="3" name="message" placeholder="Message" ></textarea>
                  <?php if (!empty($errors) && in_array('Message is empty', $errors)) {
                    echo "<p style='color: #d9534f; background-color: #f2dede; border: 1px solid #ebccd1; padding: 10px; border-radius: 5px;margin-bottom: 8px;'>Message is required</p>";
                  } ?>
                  <button type="submit" class="btn btn-default">
                    Send Email
                  </button>

                </form>
              </div>
              <div class="col-lg-4">
                <h3 class="contact-title">Contact Info</h3>
                <ul class="contact-address">
                  <li>
                    <i class="flaticon-placeholder"></i>
                    <div class="contact-content">
                      <p>Monastir</p>
                    </div>
                  </li>
                  <li>
                    <i class="flaticon-vibrating-phone"></i>
                    <div class="contact-content">
                      <p>+216 97 145 652</p>
                    </div>
                  </li>
                  <li>
                    <i class="flaticon-message"></i>
                    <div class="contact-content">
                      <p>oumezzine.farah@yahoo.fr</p>
                    </div>
                  </li>
                </ul>
                <!-- .contact-address -->
                <ul class="social-icon-rounded contact-social-icon">
                  <li>
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-google" aria-hidden="true"></i></a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- .row -->
          </div>
          <!-- .contact-us -->
        </div>
        <!-- .row -->
      </div>
      <!-- .container -->
    </section>
    <!-- End contact us-->

    <!-- Start Footer Section -->
    <footer>
      <div class="bg-footer-top">
        <div class="container">
          <div class="row">
            <div class="footer-top">
              <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="footer-widgets">
                    <div class="widgets-title">
                      <h3>About us</h3>
                    </div>
                    <!-- .widgets-title -->
                    <div class="widgets-content">
                      <p>
                        "Waste Wise Plastic" is an innovative project
                        dedicated to addressing the critical issue of plastic
                        waste in our environment.
                      </p>
                    </div>
                    <!-- .widgets-content -->
                    <div class="address-box">
                      <ul class="address">
                        <li>
                          <i class="fa fa-home" aria-hidden="true"></i>
                          <span>Tunisia,Monastir.</span>
                        </li>
                        <li>
                          <i class="fa fa-phone" aria-hidden="true"></i>
                          <span>+216 97 145 652.</span>
                        </li>
                        <li>
                          <i class="fa fa-envelope-o" aria-hidden="true"></i>
                          <span>Contact@admin.com</span>
                        </li>
                        <li>
                          <i class="fa fa-globe" aria-hidden="true"></i>
                          <span>oumezzine.farah@yahoo.fr</span>
                        </li>
                      </ul>
                    </div>
                    <!-- .address -->
                  </div>
                  <!-- .footer-widgets -->
                </div>
                <!-- .col-lg-3 -->
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="footer-widgets">
                    <div class="widgets-title">
                      <h3>Latest News</h3>
                    </div>
                    <!-- .widgets-title -->
                    <ul class="latest-news">
                      <li>
                        <span class="thumbnail-img">
                          <img src="assets/images/imagesme/fateme-alaie-Q8W2r2aCmaw-unsplash.jpg" alt="small-bog-img-1" class="img-responsive" />
                        </span>
                        <div class="thumbnail-content">
                          <h5>
                            <a href="blog_single.html">Lorem ipsum dolor sit amet...</a>
                          </h5>
                          <span class="post-date">04 February 2017</span>
                        </div>
                        <!-- .thumbnail-content -->
                      </li>
                      <li>
                        <span class="thumbnail-img">
                          <img src="assets/images/imagesme/tereza-ruba-TK-rrTgYqzo-unsplash.jpg" alt="small-bog-img-2" class="img-responsive" />
                        </span>
                        <div class="thumbnail-content">
                          <h5>
                            <a href="blog_single.html">Lorem ipsum dolor sit amet...</a>
                          </h5>
                          <span class="post-date">28 January 2017</span>
                        </div>
                        <!-- .thumbnail-content -->
                      </li>
                      <li>
                        <span class="thumbnail-img">
                          <img src="assets/images/imagesme/kelly-sikkema-1Pgq9ZpIatI-unsplash.jpg" alt="small-bog-img-3" class="img-responsive" />
                        </span>
                        <div class="thumbnail-content">
                          <h5>
                            <a href="blog_single.html">Lorem ipsum dolor sit amet...</a>
                          </h5>
                          <span class="post-date">03 January 2017</span>
                        </div>
                        <!-- .thumbnail-content -->
                      </li>
                    </ul>
                  </div>
                  <!-- .footer-widgets -->
                </div>
                <!-- .col-lg-3 -->
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="footer-widgets">
                    <div class="widgets-title">
                      <h3>Recent Blogs</h3>
                    </div>
                    <!-- .widgets-title -->
                    <ul class="blog-widget">
                      <li>

                        <div class="blog-content">
                          <h5>
                            TREES ARE A COOL SOLUTION IN THE HEAT OF THE MOMENT

                          </h5>
                          <span class="post-date">03 January 2023</span>
                        </div>
                        <!-- .blog-content -->
                      </li>
                      <li>
                        <div class="blog-icon">
                          <i class="fa fa-blog" aria-hidden="true"></i>
                        </div>
                        <div class="blog-content">
                          <h5>
                            50 HOURS OF NATURE SOUNDS TO BRING YOU CALM AND JOY
                          </h5>
                          <span class="post-date">1 month ago</span>
                        </div>
                        <!-- .twitter-content -->
                      </li>
                      <li>
                        <div class="blog-icon">
                          <i class="fa fa-blog" aria-hidden="true"></i>
                        </div>
                        <div class="blog-content">
                          <h5>
                            13 EXQUISITELY EXTREME THINGS ABOUT PLANET EARTH
                          </h5>
                          <span class="post-date">03 november 2023</span>
                        </div>
                        <!-- .blog-content -->
                      </li>
                    </ul>
                  </div>
                  <!-- .footer-blog -->
                </div>
                <!-- .col-lg-3 -->
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="footer-widgets">
                    <div class="widgets-title">
                      <h3>Recent Photos</h3>
                    </div>
                    <!-- .widgets-title -->
                    <div class="footer-instagram">
                      <a href="#"><img src="assets/images/imagesme/60183432.jpg" alt="footer-instagram-img-1" /></a>
                      <a href="#"><img src="assets/images/imagesme/agrrro-organic-vArBGqX_EtY-unsplash.jpg" alt="footer-instagram-img-2" /></a>
                      <a href="#"><img src="assets/images/imagesme/angela-benito-WgGJjGN4_ck-unsplash.jpg" alt="footer-instagram-img-3" /></a>
                      <a href="#"><img src="assets/images/imagesme/artem-beliaikin-EFwFN9RpA4w-unsplash.jpg" alt="footer-instagram-img-4" /></a>
                      <a href="#"><img src="assets/images/imagesme/maria-lin-kim-8RaUEd8zD-U-unsplash.jpg" alt="footer-instagram-img-5" /></a>
                      <a href="#"><img src="assets/images/imagesme/priscilla-du-preez-ZkfWNqu3m04-unsplash.jpg" alt="footer-instagram-img-6" /></a>
                      <a href="#"><img src="assets/images/imagesme/ecological-bag-grass.jpg" alt="footer-instagram-img-7" /></a>
                    </div>
                    <!-- .footer-instagram -->
                  </div>
                  <!-- .footer-widgets -->
                </div>
                <!-- .col-lg-3 -->
              </div>
              <!-- .row -->
            </div>
            <!-- .footer-top -->
          </div>
          <!-- .row -->
        </div>
        <!-- .container -->
      </div>
      <!-- .bg-footer-top -->

      <div class="bg-footer-bottom">
        <div class="container">
          <div class="row">
            <div class="footer-bottom">
              <div class="copyright-txt">
                <p>
                  &copy; 2023. Designer By
                  <a href="#" title="Al-Amin(Web Designer)">Oumezzine Farah</a>
                </p>
              </div>
              <!-- .copyright-txt -->
              <div class="social-box">
                <ul class="social-icon-rounded">
                  <li>
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-google" aria-hidden="true"></i></a>
                  </li>
                </ul>
              </div>
              <!-- .social-box -->
            </div>
            <!-- .footer-bottom -->
          </div>
          <!-- .row -->
        </div>
        <!-- .container -->
      </div>
      <!-- .bg-footer-bottom -->
    </footer>
    <!-- End Footer Section -->

    <!-- Start Scrolling -->
    <div class="scroll-img">
      <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>
    <!-- End Scrolling -->
  </div>

  <script src="assets/js/javascript.js"></script>
  <script type="text/javascript" src="assets/js/jquery-2.2.3.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="assets/js/jquery.waypoints.min.js"></script>
  <script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
  <script type="text/javascript" src="assets/js/swiper.min.js"></script>
  <script type="text/javascript" src="assets/js/lightcase.js"></script>
  <script type="text/javascript" src="assets/js/jquery.nstSlider.js"></script>
  <script type="text/javascript" src="assets/js/jquery.flexslider.js"></script>
  <script type="text/javascript" src="assets/js/custom.map.js"></script>
  <script type="text/javascript" src="assets/js/plugins.isotope.js"></script>
  <script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
  <script type="text/javascript" src="assets/js/custom.isotope.js"></script>
  <script type="text/javascript" src="assets/js/custom.js"></script>

<script>
    <?php if (!empty($errors)) : ?>
        // Scroll to the error section
        document.getElementById('error-section').scrollIntoView({
            behavior: 'smooth',
            block: 'start',
        });
    <?php endif; ?>
</script>

</body>

</html>