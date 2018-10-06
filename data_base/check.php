<?php 
	session_start();

	include('db_con.php');

    $score = 0;
    $wrong_score = 0;
    $total_q=0;

	$sql = "SELECT * FROM quize1";

	$run = mysqli_query($conn, $sql);

	if(!$run){
		echo "error" .mysqli_error($conn);
	}
	$result_check = mysqli_num_rows($run);

	if($result_check > 0){


		 while($data = mysqli_fetch_array($run)){

            $total_q++;

		 	if (isset($_POST['submit'])) {
			if (isset($_POST[$data['id']])) {

				$radio =  $_POST[$data['id']];
                $ans =  $data['answer'];


                echo "<br>";
                

				if($radio == $ans){
                    $score++;
                }
                else{
                    $wrong_score++;
                }

				
				}
			} 
		}
    }

   
?>
<!DOCTYPE html>
<html>
<head>
	<title>Your Status</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>



<body>

	
		<div class="hero-header">
			<h1>Welcome</h1>
			<h3><?php echo $_SESSION['username']; ?></h3>
			<?php include('../header_menu.php') ?>
		</div>
		<div class="quize-question">
			<h3><?php echo "Number Of Total Questions  = ".$total_q."<br>"; ?></h3>
			<h3><?php echo "Number Of Right Answers  = ".$score."<br>"; ?></h3>
			<h3><?php echo "Number Of Wrong Answers  = ".$wrong_score."<br>"; ?></h3>
		</div>
		



</body>
</html>