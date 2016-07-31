<?php
if(isset($_POST['name']) && isset($_POST['pass']) && isset($_POST['ICnum']) && isset($_POST['email']) && isset($_POST['phone']))
{
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
	
	//mysql_query("INSERT INTO `plogin` (`ic`, `pname`, `password`, `mail`, `tel`) VALUES ('$name', '$lname', '$uname', '$email1', '$pass1')") or die(mysql_error());
	
	$sql = "INSERT INTO plogin (ic, pname, password, mail, tel) VALUES ('{$_POST['ICnum']}', '{$_POST['name']}', '{$_POST['pass']}', '{$_POST['email']}', '{$_POST['phone']}')";
	
	if ($conn->query($sql) === TRUE)
		{	header("Location: login.html");	} 
	else {	echo "Fail to Save Records";	}

$conn->close();
	
}

?>