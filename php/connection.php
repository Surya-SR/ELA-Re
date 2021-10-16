<?php

//host, username, password, and database name
$host= "localhost";
$username= "root";
$password= "";
$dbname= "ELA_Registration";

//make an connection with the data base
$con = mysqli_connect( $host, $username, $password, $dbname)
or die(mysqli_error($con));

//start the session
session_start();

?>
