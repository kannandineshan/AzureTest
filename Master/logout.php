<?php

	//THIS PAGE LOGS OUT AN ADMIN

	session_start();
	if(session_destroy()) // Destroying All Sessions
	{
		header("Location: login.php"); // Redirecting To Login Page
	}
?>