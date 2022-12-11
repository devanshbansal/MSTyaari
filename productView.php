<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
error_reporting(0);
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'devanshb_admin';
$DATABASE_PASS = 'to-z8G7()=)H';
$DATABASE_NAME = 'devanshb_272project';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
 error_reporting(0);
?>
 <!-- <?php ob_start(); ?> -->
 <?php 
        $arr = array(
        array("id"=>0,
            "image" => "images/product-1.jpg",
            "name" => "GRE Prep",
            "description" => "Complete package for GRE preparation",
            "cost" =>"$50.00"
        ),
        array("id"=>1,
            "image" => "images/product-2.jpg",
            "name" => "TOEFL Prep",
            "description" => "Complete package for TOEFL preparation",
            "cost" =>"$40.00"
        ),
        array("id"=>2,
			"image" => "images/product-3.jpg",
			"name" => "IELTS Prep",
            "description" => "Complete package for IELTS preparation",
			"cost" =>"$60.00"
        ),
        array("id"=>3,
			"image" => "images/product-4.jpg",
			"name" => "GMAT Prep",
            "description" => "Complete package for GMAT preparation",
			"cost" =>"$30.00"
        ),
        array("id"=>4,
			"image" => "images/product-5.jpg",
			"name" => "Duolingo Prep",
            "description" => "Complete package for Duolingo preparation",
			"cost" =>"$45.00"
        ),
        array("id"=>5,
			"image" => "images/product-6.jpg",
			"name" => "Resume Review",
            "description" => "Holistic resume review along with suggestions for profile building",
			"cost" =>"$51.00"
        ),
        array("id"=>6,
			"image" => "images/product-7.jpg",
			"name" => "SOP Review",
            "description" => "Holistic SOP review along with suggestions for profile building",
			"cost" =>"$47.00"
        ), 
		array("id"=>7,
			"image" => "images/product-8.jpg",
			"name" => "University Shortlisting",
            "description" => "We will shortlist 10 best and deemed fit universities for you profile",
            "cost" =>"$53.00"
        ), 
		array("id"=>8,
			"image" => "images/product-9.jpg",
			"name" => "Examp Prepartion Combo",
            "description" => "A complete combo for GRE/TOEFL/IELTS exam prepration",
			"cost" =>"$34.00"
        ),
        array("id"=>9,
			"image" => "images/product-10.jpg",
			"name" => "Combo (GRE/TOEFL/Resume)",
            "description" => "Combo for GRE, TOEFL exam preparation along with resume review",
			"cost" =>"$71.00"
        ),

        array("id"=>10,
			"image" => "images/product-11.jpg",
			"name" => "Visa Interview Prep",
            "description" => "A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didnt take long until.",
			"cost" =>"$52.00"
        ),
		array("id"=>12,
			"image" => "images/product-12.jpg",
			"name" => "MS Tyaari Exclusive Combo",
            "description" => "A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didnt take long until.",
			"cost" =>"$58.00"
        ),

    );
    $id =  $_GET['id'];
    $id = (string)$id;

    $data =array();
    foreach ($arr as $item) {

        if($item['id']==$id){
            //echo "found <br>";
            $data = $item;
            break;
        }
    }
    $result = mysqli_query($con,"SELECT * FROM mostvisited WHERE id={$id}");
    if(mysqli_num_rows($result) === 0){
        $result2 = $con->query("INSERT INTO mostvisited (id,name,image,cost,count) values ({$id},'{$data['name']}','{$data['image']}','{$data['cost']}',1)");
    }
    else{
        while($row = $result -> fetch_assoc()){
            //echo "number of rows: " . $result->num_rows;
            $count =1+$row["count"];
            $sql = "UPDATE mostvisited set count='{$count}' where id={$id}";
            $result = $con->query($sql);
            break;
        }
    }
     
    $cookie_name = $id;
    $cookie_val = time();
    setcookie($cookie_name,$cookie_val,time()+60*60*24,'.devanshbansal.com');
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
    <!-- END nav -->
    <!-- END nav -->
    
     <?php
            echo "<section class='ftco-section'>
                    <div class='container'>
                        <center><h2>{$data['name']}</h2></center><br/><br/>
                        <div class='row'>
                            <div class='col-lg-6 mb-5 ftco-animate'>
                                <a href={$data['image']} class='image-popup'><img src={$data['image']} class='img-fluid'></a>
                            </div>
                            <div class='col-lg-6 product-details pl-md-5 ftco-animate'>
                                <div class='rating d-flex'>
                                        <p class='text-left mr-4'>
                                            <a href='#' class='mr-2'>5.0</a>
                                            <a href='#'><span class='ion-ios-star-outline'></span></a>
                                            <a href='#'><span class='ion-ios-star-outline'></span></a>
                                            <a href='#'><span class='ion-ios-star-outline'></span></a>
                                            <a href='#'><span class='ion-ios-star-outline'></span></a>
                                            <a href='#'><span class='ion-ios-star-outline'></span></a>
                                            
                                        </p>
                                        <p class='text-left mr-4'>
                                            <a href='#' class='mr-2' style='color: #000;'>100 <span style='color: #bbb;'>Rating</span></a>
                                        </p>
                                        <p class='text-left'>
                                            <a href='#' class='mr-2' style='color: #000;'>500<span style='color: #bbb;'>Sold</span></a>
                                        </p>
                                    </div>
                            <p class='price'><span>{$data['cost']}</span></p>
                                <p>{$data['description']}</p>
                            </div>
                        </div>
                    </div>
                </section>" ; 
     ?>
         

    
   

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
