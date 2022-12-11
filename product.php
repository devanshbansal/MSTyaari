<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
error_reporting(0);

?>
<?php $arr = array(
        array("id"=>0,
            "image" => "images/product-1.jpg",
            "name" => "GRE Prep",
            "cost" =>"$50.00"
        ),
        array("id"=>1,
            "image" => "images/product-2.jpg",
            "name" => "TOEFL Prep",
            "cost" =>"$40.00"
        ),
        array("id"=>2,
			"image" => "images/product-3.jpg",
			"name" => "IELTS Prep",
			"cost" =>"$60.00"
        ),
        array("id"=>3,
			"image" => "images/product-4.jpg",
			"name" => "GMAT Prep",
			"cost" =>"$30.00"
        ),
        array("id"=>4,
			"image" => "images/product-5.jpg",
			"name" => "Duolingo Prep",
			"cost" =>"$45.00"
        ),
        array("id"=>5,
			"image" => "images/product-6.jpg",
			"name" => "Resume Review",
			"cost" =>"$51.00"
        ),
        array("id"=>6,
			"image" => "images/product-7.jpg",
			"name" => "SOP Review",
			"cost" =>"$47.00"
        ), 
		array("id"=>7,
			"image" => "images/product-8.jpg",
			"name" => "University Shortlisting",
			"cost" =>"$53.00"
        ), 
		array("id"=>8,
			"image" => "images/product-9.jpg",
			"name" => "Combo (GRE/TOEFL)",
			"cost" =>"$34.00"
        ),
        array("id"=>9,
			"image" => "images/product-10.jpg",
			"name" => "Combo (GRE/TOEFL/Resume)",
			"cost" =>"$71.00"
        ),

        array("id"=>10,
			"image" => "images/product-11.jpg",
			"name" => "Visa Interview Prep",
			"cost" =>"$52.00"
        ),
		array("id"=>12,
			"image" => "images/product-12.jpg",
			"name" => "MS Tyaari Exclusive Combo",
			"cost" =>"$58.00"
        ),

    );
    $data = array();
    $temp = array();
    for($i=0;$i<12;$i++){
        if(isset($_COOKIE[(string)$i])){
            $temp[$i]= $_COOKIE[(string)$i];

        }
    }

    foreach ($temp as $key => $value) {

      foreach ($arr as $a){
         if((string)$a['id']==(String)$key){
             array_push($data,$a);
         }
      }
  
  
  }
  
  // most recent will now stay in data, but we need only the first 5
  
  $end=5;
  if(sizeof($data)<5)
      $end=sizeof($data);
  
  
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
    

    <div class="row">
        <div class="col-5">

        </div>
        <div class="col-6">
          <br/>
            <form action="mostViews.php">
                <input type="submit" class="btn btn-info" value="Most Viewed Services" />
            </form>
        </div>

    </div>


    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
			<?php
					for($i=0;$i<12;$i++){

						echo "<div class='col-md-6 col-lg-3 ftco-animate' id={$arr[$i]["id"]}>
						<div class='product'>
							<a href='productView.php?id={$arr[$i]["id"]}' class='img-prod'>
								<img class='img-fluid' src={$arr[$i]["image"]}>
								<div class='overlay'></div>
								<div class='text py-3 pb-4 px-3 text-center'>
									<h3><a href='productView.php?id={$arr[$i]["id"]}'>{$arr[$i]["name"]}</a></h3>
									<div class='d-flex'>
										<div class='pricing'>
											<p class='price'><span>{$arr[$i]["cost"]}</span></p>
										</div>
									</div>
								</div>
							</a>
							</div>
						</div>";
					}
					
			?>
    		</div>
    	</div>
    </section>
       <section class="ftco-section">
          <div class="container">
              <div class="h1" style="text-align: center">Recently Viewed</div>
          </div>
          <br>
          <br>
          <div class="container">
            <div class="row">
            <?php
              for($i=0;$i<$end;$i++){

                echo "<div class='col-md-6 col-lg-3 ftco-animate' id={$data[$i]["id"]}>
                <div class='product'>
                  <a href='productView.php?id={$data[$i]["id"]}' class='img-prod'>
                    <img class='img-fluid' src={$data[$i]["image"]}>
                    <div class='overlay'></div>
                    <div class='text py-3 pb-4 px-3 text-center'>
                      <h3><a href='productView.php?id={$data[$i]["id"]}'>{$data[$i]["name"]}</a></h3>
                      <div class='d-flex'>
                        <div class='pricing'>
                          <p class='price'><span>{$data[$i]["cost"]}</span></p>
                        </div>
                      </div>
                    </div>
                  </a>
                  </div>
                </div>";
              }
			  ?>
    		</div>
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