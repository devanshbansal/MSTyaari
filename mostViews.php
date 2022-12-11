<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'devanshb_admin';
$DATABASE_PASS = 'to-z8G7()=)H';
$DATABASE_NAME = 'devanshb_272project';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}error_reporting(0);

?>
<?php $arr = array(
        array("id"=>0,
            "image" => "images/product-1.jpg",
            "name" => "Wooden car toy",
            "cost" =>"$50.00"
        ),
        array("id"=>1,
            "image" => "images/product-2.jpg",
            "name" => "Teddy",
            "cost" =>"$40.00"
        ),
        array("id"=>2,
			"image" => "images/product-3.jpg",
			"name" => "Wooden Unicorn Toy",
			"cost" =>"$60.00"
        ),
        array("id"=>3,
			"image" => "images/product-4.jpg",
			"name" => "Rupanzal",
			"cost" =>"$30.00"
        ),
        array("id"=>4,
			"image" => "images/product-5.jpg",
			"name" => "Warrior",
			"cost" =>"$45.00"
        ),
        array("id"=>5,
			"image" => "images/product-6.jpg",
			"name" => "Cindrella",
			"cost" =>"$51.00"
        ),
        array("id"=>6,
			"image" => "images/product-7.jpg",
			"name" => "Zebra Toy",
			"cost" =>"$47.00"
        ), 
		array("id"=>7,
			"image" => "images/product-8.jpg",
			"name" => "Run Man ",
			"cost" =>"$53.00"
        ), 
		array("id"=>8,
			"image" => "images/product-9.jpg",
			"name" => "Batman Theme duck",
			"cost" =>"$34.00"
        ),
        array("id"=>9,
			"image" => "images/product-10.jpg",
			"name" => "jute monkey",
			"cost" =>"$71.00"
        ),

        array("id"=>10,
			"image" => "images/product-11.jpg",
			"name" => "Teddy",
			"cost" =>"$52.00"
        ),
		array("id"=>12,
			"image" => "images/product-12.jpg",
			"name" => "wooden blocks",
			"cost" =>"$58.00"
        ),

    );

    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Most Viewed items</title>
    <?php ob_start(); ?>
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
					<li class="nav-item"><a href="about.php" class="nav-link">Who are we</a></li>
					<li class="nav-item active"><a href="product.php" class="nav-link">Our Services</a></li> 
					<li class="nav-item"><a href="news.php" class="nav-link">News</a></li>
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

    <section class="ftco-section">
    <h2 style="color:white;"><center>Viewed Products</center></h2>
        <div style="margin: auto; width: 40%; border: 3px solid black; padding: 10px;"> 
         <?php
        $sqlrecent = "SELECT * FROM mostvisited order by count desc limit 5 ";

        $resultrecent = $con->query($sqlrecent);

        if (mysqli_num_rows($resultrecent) === 0) {

            echo "<center><h1 class='lead'> No records found </h1></center>";
        } else {

            while ($row = $resultrecent->fetch_assoc()) {
                echo "
                    <div class='block-21 mb-4 d-flex ftco-animate'>
                        <a class='blog-img mr-4'>
                            <img class='img-fluid' src={$row['image']}>
                        </a>
                        <div class='text'>
                            <h4 class='heading-1'><a>{$row['name']}</a></h4>
                            <div class='meta'>
                                <div><a><span class='icon-person'></span>Views :{$row['count']}</a></div>
                            </div>
                        </div>
                </div>";
            }

        }

        ?>
        </div>
    </section>
    
  

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