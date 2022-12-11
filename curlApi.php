<?php
    
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

    // Check connection
    if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
    }

    $sql = "SELECT * FROM users";
    $result = $con->query($sql);

    if ($result->num_rows > 0) 
    {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo $row["fname"] . " " . $row["lname"];
            echo "<br>";
        }
    } 
    else 
    {
        echo "0 results";
    }
    $con->close();
?>