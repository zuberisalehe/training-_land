<?php
$servername="localhost";
$username= "root";
$password= "";
$dbname= "form";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("connection failed". $conn->connect_error);
}
echo"<h1>connection is suceesfully done!!!<h1>";
?>