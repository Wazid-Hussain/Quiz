<?php 

	$db_server		=	"localhost";
	$db_user		=	"root";
	$db_pass		=	"";
	$db_name		=	"quize";

	$conn	=	mysqli_connect($db_server, $db_user, $db_pass, $db_name);

	if (!$conn) {
		die("Error: ".$conn->mysqli_error());
	}
 ?>