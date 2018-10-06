<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>

	<title>Welcome|</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<?php if(isset($_SESSION['username'])){
			header('Location: http://localhost/quiz/quiz.php');
		}
		if (isset($_SESSION['mastername'])){
			header('Location: http://localhost/quiz/master/master-dashboard.php');
		}
		else{
	?>
	<div class="hero-header">
		<h1>Welcome</h1>
	</div>
	<main>
		<div class="quiz-master">
			<div class="box">
				<h3>Log In As A Quiz Master </h3>
				<div class="form_box">
					<form action="data_base/master-login.php" method="POST">
						<h3 class="alert"></h3><br>
						<label>USER NAME : <br> </label><input type="text" name="username" placeholder="User Name Here"></input><br>
						<label>PASSWORD : <br> </label><input type="password" name="password" placeholder="Password Here"></input><br>
						<button type="submit" name="master-login"> LOG IN </button>
						<p>Not Register Yet : <a href="http://localhost/learn.php/log%20in%20page/registration.php">click here to register</a></p>
					</form>
				</div>
			</div>
		</div>
		
	</main>
<?php } 
 ?>
</body>
</html>