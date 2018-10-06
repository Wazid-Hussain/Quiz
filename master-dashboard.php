<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>

	<title>Welcome|</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php if(isset($_SESSION['mastername'])){ ?>
		
	
	<div class="hero-header">
		<h1>Welcome</h1>
		<h3><?php echo $_SESSION['mastername']; ?></h3>
		<?php include('header_menu.php'); ?>
	</div>
	<main id="question-add-box">
		<div class="quiz-master-q">
			<div class="box">
				<h2> Add a question to the quiz </h2><br><hr>
				<div class="form_box_question">
					<form action="data_base/add-question.php" method="POST">
						<h3 class="alert"></h3><br>
						
								<fieldset>
						    	<legend>Type Your Question Here </legend>
								<textarea rows="5" cols="120" placeholder="Type Your Question Here " name="question"></textarea>
							</fieldset>
							
						<br>
						<fieldset>
						    <legend>Give 4 Options for Your Question </legend>

						    <input type="text" name="option1">
						    <input type="text" name="option2">
						    <input type="text" name="option3">
						    <input type="text" name="option4">
						    
						</fieldset><br>

						<fieldset >
						    <legend>Type Right Answer here</legend>
							<input id="right-ans" type="text" name="answer">
						</fieldset><br>

						<button type="submit" name="create_quiz"> Make Quiz </button>
					</form>
				</div>
			</div>
		</div>
	</main>
<?php }
else{
	header('Location: http://localhost/quiz');
} ?>
</body>
</html>