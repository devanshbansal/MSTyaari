<?php
$DATABASE_HOST = 'localhost';

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

if(isset($_POST['submit']))
{
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$homephone = $_POST['homephone'];
	$cellphone = $_POST['cellphone'];
	$sql = "INSERT INTO users (fname,lname,email,address,homephone,cellphone)
	VALUES ('$fname','$lname','$email','$address','$homephone','$cellphone')";
	if (mysqli_query($con, $sql)) {
        echo '<script>
            alert("New record created successfully !")
            window.location.href="employees.php";
        </script>';
	} else {
	   echo '<script>
        alert("ERROR")
        window.location.href="employees.php";
        </script>';
	}
	mysqli_close($con);
}
?>