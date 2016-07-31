<?php
if(isset($_POST['name']) && isset($_POST['id']) && isset($_POST['servis']) && isset($_POST['doc']) && isset($_POST['tarikh']) && isset($_POST['masa']))
{
	session_start();
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "patient";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	

	
	$sql = "INSERT INTO booking (pname,ic, service, doctor, date, time) VALUES ('{$_POST['name']}', '{$_POST['id']}', '{$_POST['servis']}', '{$_POST['doc']}', '{$_POST['tarikh']}', '{$_POST['masa']}')";
	
	if ($conn->query($sql) === TRUE)
		{	header("Location: homepage_end.html");	} 
	else {	echo "Fail to Save Records";	}

$conn->close();
	
}

?>