<?php 
	session_start();
	session_destroy();
	header("location: dashboard.html");
 ?>