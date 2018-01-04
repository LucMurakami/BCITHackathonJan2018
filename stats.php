<?php 
session_start();

$host = "localhost";
$username = "id4166117_student";
$password = "student";
$dbName = "id4166117_student";
$link = mysqli_connect($host,$username,$password,$dbName);
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    
}

/* Select queries return a resultset */

    $query = "SELECT * FROM feedback WHERE course-teacher_id = ";
  	$results = mysqli_query($link, $query);

    function select_response($var) {
    $feedback = $var;
        
    switch ($feedback) {
        case 1: 
            return "Strongly Agree";
            break;
        case 2: 
            return "Agree";
            break;
        case 3: 
            return "Neutral";
            break;
        case 4: 
            return "Disagree";
            break;
        case 5: 
            return "Strongly Disagree";
            break;
        default: return "";
    }
    }

mysqli_close($link);
?>

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
			<div class="logout">
                <a class="btn btn-info" href="logout.php">Logout</a>
            </div>
				<h1 id="title">Student Feedback Survey</h1>
				<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                	
				<div id="group2">
							<table class = "table">
								
									<col width = "50%">
									<col width = "25%">
									<col width = "25%">
								<tr >
									<th class = "text-center">Questions
									</th>
									<th class = "text-center">Fb1
									</th>
									<th>Fb2
									</th>									
								</tr>
								<tr>
									<td>
										<label>1) How passionate was the teacher about the course material?</label>&nbsp;&nbsp;</td>
									<td>
										 Strongly Agree
									</td>
									<td>
										 Disagree
									</td>
								</tr>
								<tr>
									<td>
										<label>2) Did the instructor answer all questions that students had?</label>&nbsp;&nbsp;
									</td>
									<td>
										 Agree
									</td>
									<td>
										 Strongly Agree
									</td>
								</tr>
								<tr>
									<td>
										<label>3) Was the instructor's voice clear enough to understand?</label>&nbsp;&nbsp;
									</td>
									<td>
										 Strongly Disagree
									</td>
									<td>
										 Strongly Agree
									</td>
								</tr>
								<tr>
									<td>
										<label>4) How useful was the instructor's office hours?</label>&nbsp;&nbsp;
									</td>
									<td>
										 Agree
									</td>
									<td>
										 Agree
									</td>
								</tr>
								<tr>
									<td>
										<label>5) How prepared was the instructor for class?</label>&nbsp;&nbsp;
									</td>
									<td>
										 Neutral
									</td>
									<td>
										 Agree
									</td>
								</tr>
								<tr>
									<td>
										<label>6) Was the instructor on time for class?</label>&nbsp;&nbsp;
									</td>
									<td>
										 Strongly Agree
									</td>
									<td>
										 Agree
									</td>
								</tr>
								<tr>
									<td>
										<label>7) How useful was the course material?</label>&nbsp;&nbsp;
									</td>
									<td>
										 Strongly Agree
									</td>
									<td>
										 Strongly Agree
									</td>
								</tr>
								<tr>
									<td>
										<label>8) Was the teacher nice to the students?</label>&nbsp;&nbsp;
									</td>
									<td>
										 Agree
									</td>
									<td>
										 Agree
									</td>

								</tr>
								<tr>
									<td>
										<label>9) Were the exams fair?</label>&nbsp;&nbsp;
									</td>
									<td>
										 Neutral
									</td>
									<td>
										 Neutral
									</td>
								</tr>
                                <tr >
                                    <td>
                                        <label>Comments Fb1</label>
                                    </td>
                                    <td colspan="2">Text</td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>Comments Fb2</label>
                                    </td>
                                    <td colspan="2">Text</td>
                                </tr>
							</table>
						<br />
							<div class="text-center">
							<label>Other Comments:</label>
							<textarea rows="4" cols="10" class="form-control" name="comment" maxlength="250" form="question"></textarea>
							<br />
					
							<input type="submit" name="submit" value="Submit">
							</div>
						</div>
					</div>
			</div>
		</div>
	</body>
</html>
