<?php
	 include('db_con.php'); 

	if(isset($_POST['create_quize'])){
			
			# Variables to hold the data from html input tags
			$question = $_POST['question'];
			$option1 = $_POST['option1'];
			$option2 = $_POST['option2'];
			$option3 = $_POST['option3'];
			$option4 = $_POST['option4'];
			$answer	= $_POST['answer'];


		# SQL query to insert the data into databse
		$sql = "INSERT INTO quize1 ( question , option1 , option2 , option3 , option4 , answer) VALUES ( '$question' , '$option1' , '$option2' , '$option3' , '$option4' , $answer)";
		$run = mysqli_query($conn , $sql);

		if(!$run){
			die("ERROR" . mysqli_error($conn));
		}
		else{

			header('location: http://localhost/quizssss');
		}


		}