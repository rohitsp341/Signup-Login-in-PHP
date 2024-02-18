<?php
$servername = "localhost";
$username = "rohit";
$password = "rohit";
$db_name = "db2signup";
$conn = new mysqli($servername, $username, $password, $db_name, 3307);
if($conn->connect_error){
    die("Connection failed".$conn->connect_error);
}
echo "";

?>