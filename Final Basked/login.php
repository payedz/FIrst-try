<?php

session_start();

// Open Connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "patient";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
	}

if(isset($_POST['name']) && isset($_POST['pass']))
{
 // Check Account Exist or not
 $sql = "select * From plogin WHERE pname = '{$_POST['name']}' AND password = '{$_POST['pass']}'";
 $result = $conn->query($sql);
 //If exist
 if ($result->num_rows > 0) {
 
 $_SESSION["pname"] = $_POST['name'];
 $_SESSION["password"] = $_POST['pass'];

 header("Location: apptbooking.html");
 }
 else
 {
  header("Location: login.html");
 }
 
 
}
else
{
 header("Location: loginpage.html");
}

 




?>