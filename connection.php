<?php
$servername = "localhost";
$username = "root";
$password = "";
$name_db = "finalproject";

$conn = new mysqli($servername, $username, $password, $name_db);
$conn->set_charset( 'utf8' ); 

/*  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());}
    echo "Connection Successfullllly";
 */
 ?>