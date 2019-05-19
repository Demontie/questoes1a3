<?php 
if (isset($_SESSION['loggedin']) || isset($_COOKIE['Loggedin'])){
	header("Location: http://www.google.com");
	exit();
}
