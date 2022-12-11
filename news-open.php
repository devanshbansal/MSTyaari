<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>MS Tyaari</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
  <body class="goto-here">
		
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">MS Tyaari</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
					<li class="nav-item active"><a href="about.php" class="nav-link">About</a></li>
					<li class="nav-item"><a href="product.php" class="nav-link">Products</a></li> 
					<li class="nav-item active"><a href="news.php" class="nav-link">NewsLetter</a></li>
                    <?php if($_SESSION["loggedin"]) { echo ('
                        <li class="nav-item"><a href="employees.php" class="nav-link">Employees</a></li>
                        <li class="nav-item"><a href="allemployees.php" class="nav-link">Other Employees</a></li>
                        <li class="nav-item"><a href="logout.php" class="nav-link"><i class="fa fa-sign-out" style="color:black">Log Out</i></a></li>
                        ');} else {echo ('
                            <li class="nav-item"><a href="employeelogin.php" class="nav-link">Admin</a></li>
                    ');} ?>
				  </ul>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/lego-4.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<h1 class="mb-0 bread">Product News</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
						<h2 class="mb-3">Themed Lego set for 6+</h2>
            <p>Lego pieces of all varieties constitute a universal system. Despite variation in the design and the purposes of individual pieces over the years, each piece remains compatible in some way with existing pieces. Lego bricks from 1958 still interlock with those made in the current time, and Lego sets for young children are compatible with those made for teenagers.Building legos of different themes like Mickey Mouse, Big Bang Theory etc. for kids above the age of 6 years</p>
            <section class="ftco-section">
              <div class="container">
                <div class="row">
                  <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="product">
                      <a href="#" class="img-prod"><img class="img-fluid" src="images/lego-1.jpg" ></a>
                      <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="#">House kit</a></h3>
                        <div class="d-flex">
                          <div class="pricing">
                            <p class="price"><span>$60.00</span></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="product">
                      <a href="#" class="img-prod"><img class="img-fluid" src="images/lego-2.jpg">
                        <div class="overlay"></div>
                      </a>
                      <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="#">Street boys kit</a></h3>
                        <div class="d-flex">
                          <div class="pricing">
                            <p class="price"><span>$50.00</span></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="product">
                      <a href="#" class="img-prod"><img class="img-fluid" src="images/lego-3.jpg">
                        <div class="overlay"></div>
                      </a>
                      <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="#">Big Bang Kit</a></h3>
                        <div class="d-flex">
                          <div class="pricing">
                            <p class="price"><span>$70.00</span></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="product">
                      <a href="#" class="img-prod"><img class="img-fluid" src="images/lego-5.jpg" >
                        <div class="overlay"></div>
                      </a>
                      <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="#">Front line Kit</a></h3>
                        <div class="d-flex">
                          <div class="pricing">
                            <p class="price"><span>$60.00</span></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="product">
                      <a href="#" class="img-prod"><img class="img-fluid" src="images/lego-6.jpg" >
                        <div class="overlay"></div>
                      </a>
                      <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="#">Mickey Mouse Kit</a></h3>
                        <div class="d-flex">
                          <div class="pricing">
                            <p class="price"><span>$50.00</span></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="product">
                      <a href="#" class="img-prod"><img class="img-fluid" src="images/lego-7.jpg" >
                        <div class="overlay"></div>
                      </a>
                      <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="#">The Office kit</a></h3>
                        <div class="d-flex">
                          <div class="pricing">
                            <p class="price"><span>$50.00</span></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
           </div> 
           
           <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar ftco-animate">
            
            <div class="sidebar-box ftco-animate">
            	<h3 class="heading">Categories</h3>
              <ul class="categories">
                <li><a>Wooden Toys <span>(12)</span></a></li>
                <li><a>polypropylene Toys <span>(22)</span></a></li>
                <li><a>Natural Rubber toys <span>(37)</span></a></li>
                <li><a>Natural Fiber Toys <span>(42)</span></a></li>
              </ul>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3 class="heading">Previous Collection</h3>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading-1"><a>Wooden Toys used in early 2000s</a></h3>
                  <div class="meta">
                    <div><a><span class="icon-calendar"></span> Aug 09, 2022</a></div>
                    <div><a><span class="icon-person"></span> Admin</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
                <div class="text">
                  <h3 class="heading-1"><a >Means of Transportation</a></h3>
                  <div class="meta">
                    <div><a><span class="icon-calendar"></span> Jul 04, 2022</a></div>
                    <div><a><span class="icon-person"></span> Admin</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_6.jpg);"></a>
                <div class="text">
                  <h3 class="heading-1"><a>Disney Collection</a></h3>
                  <div class="meta">
                    <div><a><span class="icon-calendar"></span> June 08, 2022</a></div>
                    <div><a><span class="icon-person"></span> Admin</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> <!-- .section -->

  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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