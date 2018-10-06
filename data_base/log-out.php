<?php
	#starting the session
	session_start();

	

	#This part will be for stoping the session
	
		session_destroy();
		header('location: http://localhost/quiz');
	
	?>