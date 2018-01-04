<?php ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Survey Form</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
		<link href="stylesheet/style.css" rel="stylesheet">
	</head>
	<body>
		<div class="container text-center">
			<input type="submit" name="logout" value="Logout" class="logout">
			<form action="feedback-form.php" method="post" id="question">
				<h1 id="title">Teacher Feedback Survey</h1>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						
						<div id="group2">
						<label>1) How passionate was the teacher about the course material?</label>&nbsp;&nbsp;
						1 <input type="radio" name="answer1" value="1">&nbsp;&nbsp;
						2 <input type="radio" name="answer1" value="2">&nbsp;&nbsp;
						3 <input type="radio" name="answer1" value="3">&nbsp;&nbsp;
						4 <input type="radio" name="answer1" value="4">&nbsp;&nbsp;
						5 <input type="radio" name="answer1" value="5"> <br /><br />
						<label>2) Did the instructor answer all questions that students had?</label>&nbsp;&nbsp;
						1 <input type="radio" name="answer2" value="1">&nbsp;&nbsp;
						2 <input type="radio" name="answer2" value="2">&nbsp;&nbsp;
						3 <input type="radio" name="answer2" value="3">&nbsp;&nbsp;
						4 <input type="radio" name="answer2" value="4">&nbsp;&nbsp;
						5 <input type="radio" name="answer2" value="5"> <br /><br />
						<label>3) Was the instructor's voice clear enough to understand?</label>&nbsp;&nbsp;
						1 <input type="radio" name="answer3" value="1">&nbsp;&nbsp;
						2 <input type="radio" name="answer3" value="2">&nbsp;&nbsp;
						3 <input type="radio" name="answer3" value="3">&nbsp;&nbsp;
						4 <input type="radio" name="answer3" value="4">&nbsp;&nbsp;
						5 <input type="radio" name="answer3" value="5"> <br /><br />
						<label>4) How useful was the instructor's office hours?</label>&nbsp;&nbsp;
						1 <input type="radio" name="answer4" value="1">&nbsp;&nbsp;
						2 <input type="radio" name="answer4" value="2">&nbsp;&nbsp;
						3 <input type="radio" name="answer4" value="3">&nbsp;&nbsp;
						4 <input type="radio" name="answer4" value="4">&nbsp;&nbsp;
						5 <input type="radio" name="answer4" value="5"> <br /><br />
						<label>5) How prepared was the instructor for class?</label>&nbsp;&nbsp;
						1 <input type="radio" name="answer5" value="1">&nbsp;&nbsp;
						2 <input type="radio" name="answer5" value="2">&nbsp;&nbsp;
						3 <input type="radio" name="answer5" value="3">&nbsp;&nbsp;
						4 <input type="radio" name="answer5" value="4">&nbsp;&nbsp;
						5 <input type="radio" name="answer5" value="5"> <br /><br />
						<label>6) Was the instructor on time for class?</label>&nbsp;&nbsp;
						1 <input type="radio" name="answer6" value="1">&nbsp;&nbsp;
						2 <input type="radio" name="answer6" value="2">&nbsp;&nbsp;
						3 <input type="radio" name="answer6" value="3">&nbsp;&nbsp;
						4 <input type="radio" name="answer6" value="4">&nbsp;&nbsp;
						5 <input type="radio" name="answer6" value="5"> <br /><br />
						<label>7) How useful was the course material?</label>&nbsp;&nbsp;
						1 <input type="radio" name="answer7" value="1">&nbsp;&nbsp;
						2 <input type="radio" name="answer7" value="2">&nbsp;&nbsp;
						3 <input type="radio" name="answer7" value="3">&nbsp;&nbsp;
						4 <input type="radio" name="answer7" value="4">&nbsp;&nbsp;
						5 <input type="radio" name="answer7" value="5"> <br /><br />
						<label>8) Was the teacher nice to the students?</label>&nbsp;&nbsp;
						1 <input type="radio" name="answer8" value="1">&nbsp;&nbsp;
						2 <input type="radio" name="answer8" value="2">&nbsp;&nbsp;
						3 <input type="radio" name="answer8" value="3">&nbsp;&nbsp;
						4 <input type="radio" name="answer8" value="4">&nbsp;&nbsp;
						5 <input type="radio" name="answer8" value="5"> <br /><br />
						<label>9) Were the exams fair?</label>&nbsp;&nbsp;
						1 <input type="radio" name="answer9" value="1">&nbsp;&nbsp;
						2 <input type="radio" name="answer9" value="2">&nbsp;&nbsp;
						3 <input type="radio" name="answer9" value="3">&nbsp;&nbsp;
						4 <input type="radio" name="answer9" value="4">&nbsp;&nbsp;
						5 <input type="radio" name="answer9" value="5"> <br /><br />
					
				
						
						<div class="text-center">
							<label>Other Comments:</label>
							<textarea rows="4" cols="10" class="form-control" name="comment" maxlength="250" form="question"></textarea>
							<br />
					
							<input type="submit" name="submit" value="Submit">
						</div>
					</div>
				</div>
			</div>

		</form>
		</div>
		
	</body>
</html>