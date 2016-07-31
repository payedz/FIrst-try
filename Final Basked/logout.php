<?php
session_unset();

 echo"Succesfully Logout<br>";
 echo"Redirect to Homepage in 5 seconds!!<br>";
 
 header('Refresh: 5; URL=homepage.html');
 
?>