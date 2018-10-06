<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>QUIZ</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<?php include('data_base/db_con.php'); 

	$sql = "SELECT * FROM quiz1";

	$run = mysqli_query($conn, $sql);

	if(!$run){
		echo "error" .mysqli_error($conn);
	}

	$result_check = mysqli_num_rows($run);

	if($result_check > 0){

		?>
		<div class="hero-header">
			<h1>Welcome</h1>
			<h3><?php echo $_SESSION['username']; ?></h3>
			<?php include('header_menu.php'); ?>
		</div>
		<div class="quiz-question">
		<form method="POST" action="data_base/check.php">
		<table style="width:100%">	
		<?php

		 while($data = mysqli_fetch_array($run)){

		?>
			
				
			
								
						<tr><fieldset class="question-fields">
							<legend><h3><u><?php echo "$data[question]"; ?></u></h3></legend>
										
					
							<div class="option-one">
							<input type="radio" name="<?php echo "$data[id]"; ?>" value="<?php echo "$data[option1]"; ?>" id="radiotest"><label for="radiotest"><?php echo "$data[option1]"; ?></label>		
							</div>					
							<input type="radio" name="<?php echo "$data[id]"; ?>" value="<?php echo "$data[option2]"; ?>"><?php echo "$data[option2]"; ?>
							<input type="radio" name="<?php echo "$data[id]"; ?>" value="<?php echo "$data[option3]"; ?>"><?php echo "$data[option3]"; ?>
							<input type="radio" name="<?php echo "$data[id]"; ?>" value="<?php echo "$data[option4]"; ?>"><?php echo "$data[option4]"; ?>
							</fieldset>
						</tr>

					
				
				
					
			
			

		<?php
		}
		?>
		</table>
		<input type="submit" name="submit" value="Submit">

		
		</form>
		</div>
		<?php
		
	}
	else{
		echo "Error : " . mysqli_error($conn);
	}
	 ?>



</body>
</html>