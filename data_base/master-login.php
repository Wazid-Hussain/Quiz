<?php


 include('db_con.php'); 
	#to start a session
	session_start();

	
	# error message when user not found in database
	

	


/*============================ SQL PART=======================================================*/	

		# Only execute when the user click on the LOG IN button
		if(isset($_POST['master-login'])){

				#store the user name and password 
				$user_name = $_POST['username'];
				$password = $_POST['password'];
				

				# SQL query to select data from the database
				$sql = "SELECT * FROM master_login WHERE mastername = '$user_name' and password = '$password' ";
				$run = mysqli_query($conn , $sql);

				# To check if there any error while executing the sql code
				if(!$run){
					echo "ERROR" . mysqli_error($conn);
				}
				
				
				# To get the numbers of rows according to the user credentials
				$result = mysqli_num_rows($run);

				# check is there any row present in the database
				if($result > 0){

					# Fetch the data in form of array and start the session with the associated 'id'
					$data = mysqli_fetch_assoc($run);
						$_SESSION['mastername'] = $data['mastername'];

						header('Location: http://localhost/quiz/master-dashboard.php');
				}
				else{
						header('Location: http://localhost/quiz');;
				}
		}

		
