<?php
 
 
function Connect()
{
 $dbhost = "sql306.byethost9.com";
 $dbuser = "b9_21646915";
 $dbpass = "bobby@123";
 $dbname = "b9_21646915_movies";
 
 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);
 
 return $conn;
}
 
?>