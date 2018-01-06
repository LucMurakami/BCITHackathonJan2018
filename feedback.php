<?php
session_start();
if(!isset($_SESSION['studentID'])){
    $_SESSION['errormsg'] = "Login First"; 
    header("location:login.php");
}
$_SESSION["feedback-push"] = $_GET["q"];

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Survey Form</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
		<link href="stylesheet/style.css" rel="stylesheet">
		<script>
            function radioValidate() {
                var answer1 = document.getElementsByName("answer1");
                var answer2 = document.getElementsByName("answer2");
                var answer3 = document.getElementsByName("answer3");
                var answer4 = document.getElementsByName("answer4");
                var answer5 = document.getElementsByName("answer5");
                var answer6 = document.getElementsByName("answer6");
                var answer7 = document.getElementsByName("answer7");
                var answer8 = document.getElementsByName("answer8");
                var answer9 = document.getElementsByName("answer9");
                var answer = [answer1, answer2, answer3, answer4, answer5, answer6, answer7, answer8, answer9]
                var validate = false;
                var count = 0;
                for (var i = 0; i < 9; i++) {
                    var j = 0;
                    
                    while (!validate && j < answer[i].length) {
                        if (answer[i][j].checked) 
                            count++;
                        j++;
                    }
                    
                }
                console.log(count);
                if (count!=9) {
                    alert("You must answer all questions");
                    return false;
                }
                return true;
                    
            }
        </script>
	</head>
	<body>
		<div class="container text-center">
			
			<form action="feedback-validation.php" method="post" id="question"  onsubmit="return radioValidate()">
				<h1 id="title">Teacher Feedback Survey
				<a  href="logout.php" class="logout btn btn-default">Logout</a>
				</h1>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						
				<div id="group2">
							<table class = "table">
								
									<col width = "50%">
									<col width = "10%">
									<col width = "10%">
									<col width = "10%">
									<col width = "10%">
									<col width = "10%">
								
								<tr >
									<th class = "text-center">Questions
									</th>
									<th class = "text-center">Strongly Agree
									</th>
									<th>Agree
									</th>
									<th>Neutral
									</th>
									<th>Disagree
									</th>
									<th>Strongly Disagree
									</th>
									
								</tr>
								<tr>
									<td>
										<label>1) How passionate was the teacher about the course material?</label>&nbsp;&nbsp;</td>
									<td>
										 <input type="radio" name="answer1" value="1">&nbsp;&nbsp;
									</td>
									<td>
										 <input type="radio" name="answer1" value="2">&nbsp;&nbsp;
									</td>
									<td>
										 <input type="radio" name="answer1" value="3">&nbsp;&nbsp;
									</td>
									<td>
										 <input type="radio" name="answer1" value="4">&nbsp;&nbsp;
									</td>
									<td>
										 <input type="radio" name="answer1" value="5"> <br />
									</td>

								</tr>
								<tr>
									<td>
										<label>2) Did the instructor answer all questions that students had?</label>&nbsp;&nbsp;
									</td>
									<td>
										 <input type="radio" name="answer2" value="1">&nbsp;&nbsp;
									</td>
									<td>
										 <input type="radio" name="answer2" value="2">&nbsp;&nbsp;
									</td>
									<td>
										 <input type="radio" name="answer2" value="3">&nbsp;&nbsp;
									</td>
									<td>
										 <input type="radio" name="answer2" value="4">&nbsp;&nbsp;
									</td>
									<td>
										 <input type="radio" name="answer2" value="5"> <br />
									</td>
								</tr>
								<tr>
									<td>
										<label>3) Was the instructor's voice clear enough to understand?</label>&nbsp;&nbsp;
									</td>
									<td>
										 <input type="radio" name="answer3" value="1">&nbsp;&nbsp;
									</td>
									<td>
										 <input type="radio" name="answer3" value="2">&nbsp;&nbsp;
									</td>
									<td>
										 <input type="radio" name="answer3" value="3">&nbsp;&nbsp;
									</td>
									<td>
										 <input type="radio" name="answer3" value="4">&nbsp;&nbsp;
									</td>
									<td>	
										 <input type="radio" name="answer3" value="5"> <br />
									</td>
								</tr>
								<tr>
									<td>
										<label>4) How useful was the instructor's office hours?</label>&nbsp;&nbsp;
									</td>
									<td>
										 <input type="radio" name="answer4" value="1">&nbsp;&nbsp;
									</td>
									<td>
										 <input type="radio" name="answer4" value="2">&nbsp;&nbsp;
									</td>
									<td>
										 <input type="radio" name="answer4" value="3">&nbsp;&nbsp;
									</td>
									<td>
										 <input type="radio" name="answer4" value="4">&nbsp;&nbsp;
									</td>
									<td>
										 <input type="radio" name="answer4" value="5"> <br />
									</td>
								</tr>
								<tr>
									<td>
										<label>5) How prepared was the instructor for class?</label>&nbsp;&nbsp;
									</td>
									<td>
										 <input type="radio" name="answer5" value="1">&nbsp;&nbsp;
									</td>
									<td>
										 <input type="radio" name="answer5" value="2">&nbsp;&nbsp;
									</td>
									<td>
										 <input type="radio" name="answer5" value="3">&nbsp;&nbsp;
									</td>
									<td>
										 <input type="radio" name="answer5" value="4">&nbsp;&nbsp;
									</td>
									<td>
										 <input type="radio" name="answer5" value="5"> <br />
									</td>
								</tr>
								<tr>
									<td>
										<label>6) Was the instructor on time for class?</label>&nbsp;&nbsp;
									</td>
									<td>
										 <input type="radio" name="answer6" value="1">&nbsp;&nbsp;
									</td>
									<td>
										 <input type="radio" name="answer6" value="2">&nbsp;&nbsp;
									</td>
									<td>
										 <input type="radio" name="answer6" value="3">&nbsp;&nbsp;
									</td>
									<td>
										 <input type="radio" name="answer6" value="4">&nbsp;&nbsp;
									</td>
									<td>
										 <input type="radio" name="answer6" value="5"> <br />
									</td>
								</tr>
								<tr>
									<td>
										<label>7) How useful was the course material?</label>&nbsp;&nbsp;
									</td>
									<td>
										 <input type="radio" name="answer7" value="1">&nbsp;&nbsp;
									</td>
									<td>
										 <input type="radio" name="answer7" value="2">&nbsp;&nbsp;
									</td>
									<td>
										 <input type="radio" name="answer7" value="3">&nbsp;&nbsp;
									</td>
									<td>
										 <input type="radio" name="answer7" value="4">&nbsp;&nbsp;
									</td>
									<td>
										 <input type="radio" name="answer7" value="5"> <br />
									</td>
								</tr>
								<tr>
									<td>
										<label>8) Was the teacher nice to the students?</label>&nbsp;&nbsp;
									</td>
									<td>
										 <input type="radio" name="answer8" value="1">&nbsp;&nbsp;
									</td>
									<td>
										 <input type="radio" name="answer8" value="2">&nbsp;&nbsp;
									</td>
									<td>
										 <input type="radio" name="answer8" value="3">&nbsp;&nbsp;
									</td>
									<td>
										 <input type="radio" name="answer8" value="4">&nbsp;&nbsp;
									</td>
									<td>
										 <input type="radio" name="answer8" value="5"> <br />
									</td>
								</tr>
								<tr>
									<td>
										<label>9) Were the exams fair?</label>&nbsp;&nbsp;
									</td>
									<td>
										 <input type="radio" name="answer9" value="1">&nbsp;&nbsp;
									</td>
									<td>
										 <input type="radio" name="answer9" value="2">&nbsp;&nbsp;
									</td>
									<td>
										 <input type="radio" name="answer9" value="3">&nbsp;&nbsp;
									</td>
									<td>
										 <input type="radio" name="answer9" value="4">&nbsp;&nbsp;
									</td>
									<td>
										 <input type="radio" name="answer9" value="5"> <br />
									</td>
								</tr>
								
						
							</table>
						<br />
							<div class="text-center">
							<label>Other Comments:</label>
							<textarea rows="4" cols="10" class="form-control" name="comment" maxlength="250" form="question"></textarea>
							<br />
					
							<input type="submit" name="submit" value="Submit" >
							</div>
						</div>
					</div>
			</div>

		</form>
		</div>
		
	</body>
</html>
</html>