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

   $query1 = "select * from feedback where course-teacher_id = 'COMP1510-A0010110'";
  	$results = mysqli_query($link, $query);
  	echo "<b>student</b> <br/>";
  	while($row = mysqli_fetch_array($results, MYSQLI_ASSOC))
        {
            echo $row["student_id"]." ",$row["password"]."<br />";
        }
mysqli_close($link);
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Teacher</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
		<link href="stylesheet/style.css" rel="stylesheet">
	</head>



	<body>
		<div class="container text-center">
			<h1 id="title">Teacher</h1>
		</div>

	</body>
</html>
