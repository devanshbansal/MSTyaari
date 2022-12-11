<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// Change this to your connection info.

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
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: employeelogin.php');
	exit;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>MSTyaari</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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

    <style>

      table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        align-items: center;
        justify-content: center;
        height: auto;
        padding: auto;
        display: flex;
        color:black;
      }

      td, th {
        text-align: left;
        padding: 8px;
        border: 1px solid black;
      }
      tr{
        background-color: white;
      }
      tr:nth-child(even) {
        background-color: #FFFBE6;
      }
      
    </style>
    <script>
      function printDiv() {
        var divContents = document.getElementById("download").innerHTML;
        var a = window.open('', '', 'height=500, width=1000');
        a.document.write('<html>');
          a.document.write('<body >');
          a.document.write(divContents);
          a.document.write('</body></html>');
          a.document.close();
          a.print();
}
    </script>
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
					<li class="nav-item"><a href="product.php" class="nav-link">Our Services</a></li> 
					<li class="nav-item active"><a href="news.php" class="nav-link">News</a></li>
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
    <section class="ftco-section">
      <div id="download">
        <table>
            <tr>
              <th colspan="2">
                <center>
                  <input type="button" data-modal="modalOne" value="Add Employee" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                </center>
              </th>
              <!-- ------------------------- -->
              <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <h2 style="color:black;"><center>Add Employee Details</center></h2>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                    <center>
                      <form action="add.php" style="color:black;" method="post">
                        <label for="fname" style="color:black;">First name:</label>&nbsp;&nbsp; &nbsp;
                        <input type="text" style="color:black;" name="fname" required placeholder="Enter your first name"><br/>
                        <label for="lname" style="color:black;">Last name:</label>&nbsp;&nbsp; &nbsp;
                        <input type="text" style="color:black;" name="lname" required placeholder="Enter your Last name"><br/>
                        <label for="email" style="color:black;">Email:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
                        <input type="email" style="color:black;" name="email"required  placeholder="Enter your Email"><br/>
                        <label for="address" style="color:black;">Address:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                        <textarea type="text" style="color:black;" name="address" required cols="23" placeholder="Enter your Address"></textarea><br/>
                        <label for="homephone" style="color:black;">Home Phone:</label>
                        <input type="tel" style="color:black;" name="homephone" required placeholder="Enter your home phone details"><br/>
                        <label for="cellphone" style="color:black;">Cell Phone:</label>&nbsp;&nbsp;&nbsp;&nbsp; 
                        <input type="tel" style="color:black;" name="cellphone" required placeholder="Enter your cell phone details"><br/>
                        <br>
                        <input type="submit" name="submit" class="btn btn-primary btn-lg" value="Add">
                        <input type="button" data-dismiss="modal" class="btn btn-danger btn-lg" value="Close">
                      </form>
                    </center>
                    </div>
                    <div class="modal-footer">
                    </div>
                  </div>
                </div>
              </div>
              <!-- ----------------------------- -->
              <th colspan="3">
                  <h2 style="color:black;"> 
                    <center>All Employee Details</center>
                  </h2>
                  <center>
                    <a href="search.php" style="color:black;">click here search based on choice</a>
                  <center>
               </th>
               <th colspan="2">
               <center>
                  <input type="button" value="Download details" class="btn btn-primary btn-lg" 
                    onclick="printDiv()">
                </center>
              </th>
            </tr>
            <tr>
               <th>Sl. No</th>
               <th>First Name</th>
               <th>Last Name</th>
               <th>Email</th>
               <th>Address</th>
               <th>Landline No.</th>
               <th>Phone No.</th>
            </tr>
            <?php 
                  $sql1 = "select * from users";
                  
                  $results1 = mysqli_query($con,$sql1);
                while ($row = mysqli_fetch_array($results1)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['fname']; ?> </td>
                <td><?php echo $row['lname']; ?> </td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['homephone']; ?></td>
                <td><?php echo $row['cellphone']; ?></td>
            </tr>
            <?php } ?>
        </table>
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
  <script src="js/main.js"></script>
  <script src="js/login.js"></script>
  </body>
</html>