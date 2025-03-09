<?php

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "anime";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}

// Variables to be inserted into the table
$u_name = $_POST['u_name'];
$u_eid = $_POST['u_eid'];
$a_name = $_POST['a_name'];

// Sql query to be executed
$sql = "INSERT INTO `request_anime` (`u_name`, `u_eid`, `a_name`) VALUES ('$u_name', '$u_eid', '$a_name');";
$result = mysqli_query($conn, $sql);

// Add a new trip to the Trip table in the database
if($result){
    echo "
    <script>
        alert('Your request has been submitted successfully. We will get back to you soon!');
        window.location.href='index.html';
    </script>";
}
else{
    echo "<script>
        alert('Sorry! Your request could not be submitted. Please try again later.');
        window.location.href='index.html';
    </script>";
}
?>
