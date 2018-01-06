<?php 
session_start();
if(!isset($_SESSION['teacherID'])){
    $_SESSION['errormsg'] = "Login First"; 
    header("location:login.php");
}

$host = "localhost";
$username = "id4166117_student";
$password = "student";
$dbName = "id4166117_student";
$link = mysqli_connect($host,$username,$password,$dbName);
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    
}
$pull_id = $_GET["q"];
/* Select queries return a resultset */
   $query = "SELECT * FROM `feedback` WHERE `course-teacher_id` like '$pull_id'";
  	$results = mysqli_query($link, $query);
  	$count = 0;
  	$row;
    while($temp = mysqli_fetch_array($results, MYSQLI_NUM)){
       $row[$count] = $temp;
       $count++;
    }
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
			<div >
                
            </div>
				<h1 id="title">Student Feedback Survey
				<a class="btn btn-info" href="logout.php" class="logout">Logout</a>
				</h1>
				<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                	
				<div id="group2">
							<table class = "table">
								
									<col width = "50%">
									<col width = "16%">
									<col width = "16%">
									<col width = "16%">
								<tr >
									<th class = "text-center">Questions
									</th>
									<?php
									  for($i = 0; $i < $count; $i++){
									      echo "<th class = 'text-center'>FB".($i + 1)."</th>";
									  }
									?>									
								</tr>
								<tr>
									<td>
										<label>1) How passionate was the teacher about the course material?</label>&nbsp;&nbsp;</td>
									<?php
									  for($i = 0; $i < $count; $i++){
									      $data = $row[$i][1];
									      echo "<td class = 'text-center'>".(select_response($data))."</td>";
									  }
									?>
								</tr>
								<tr>
									<td>
										<label>2) Did the instructor answer all questions that students had?</label>&nbsp;&nbsp;
									</td>
									<?php
									  for($i = 0; $i < $count; $i++){
									      $data = $row[$i][2];
									      echo "<td class = 'text-center'>".(select_response($data))."</td>";
									  }
									?>
								</tr>
								<tr>
									<td>
										<label>3) Was the instructor's voice clear enough to understand?</label>&nbsp;&nbsp;
									</td>
									<?php
									  for($i = 0; $i < $count; $i++){
									      $data = $row[$i][3];
									      echo "<td class = 'text-center'>".(select_response($data))."</td>";
									  }
									?>
								</tr>
								<tr>
									<td>
										<label>4) How useful was the instructor's office hours?</label>&nbsp;&nbsp;
									</td>
									<?php
									  for($i = 0; $i < $count; $i++){
									      $data = $row[$i][4];
									      echo "<td class = 'text-center'>".(select_response($data))."</td>";
									  }
									?>
								</tr>
								<tr>
									<td>
										<label>5) How prepared was the instructor for class?</label>&nbsp;&nbsp;
									</td>
									<?php
									  for($i = 0; $i < $count; $i++){
									      $data = $row[$i][5];
									      echo "<td class = 'text-center'>".(select_response($data))."</td>";
									  }
									?>
								</tr>
								<tr>
									<td>
										<label>6) Was the instructor on time for class?</label>&nbsp;&nbsp;
									</td>
								    <?php
									  for($i = 0; $i < $count; $i++){
									      $data = $row[$i][6];
									      echo "<td class = 'text-center'>".(select_response($data))."</td>";
									  }
									?>
								</tr>
								<tr>
									<td>
										<label>7) How useful was the course material?</label>&nbsp;&nbsp;
									</td>
									<?php
									  for($i = 0; $i < $count; $i++){
									      $data = $row[$i][7];
									      echo "<td class = 'text-center'>".(select_response($data))."</td>";
									  }
									?>
								</tr>
								<tr>
									<td>
										<label>8) Was the teacher nice to the students?</label>&nbsp;&nbsp;
									</td>
									<?php
									  for($i = 0; $i < $count; $i++){
									      $data = $row[$i][8];
									      echo "<td class = 'text-center'>".(select_response($data))."</td>";
									  }
									?>

								</tr>
								<tr>
									<td>
										<label>9) Were the exams fair?</label>&nbsp;&nbsp;
									</td>
									<?php
									  for($i = 0; $i < $count; $i++){
									      $data = $row[$i][9];
									      echo "<td class = 'text-center'>".(select_response($data))."</td>";
									  }
									?>
								</tr>
								<?php
									  for($i = 0; $i < $count; $i++){
									      $data = $row[$i][10];
        							        echo "<tr >
                                                    <td>
                                                        <label>Comments Fb".($i + 1)."</label>
                                                    </td>
                                                    <td colspan='".$count."'>$data</td>
                                                </tr>";
									  }
									?>
                                
							</table>
						<br />
							
						</div>
					</div>
			</div>
		</div>
	</body>
</html>