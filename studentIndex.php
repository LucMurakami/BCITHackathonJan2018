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

/* Select queries return a result set */

    $query = "SELECT * FROM student WHERE student_id = '$_SESSION[loginID]'";
  	$results = mysqli_query($link, $query);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Review</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
		<link href="stylesheet/style.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">	
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
					<h3>Profile</h3>
                    <a href="logout.php" class="btn btn-default" type="submit" name="logout" value="Logout">Logout</a>

					<table>
                        <?php while($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
                            echo "<tr><td><a href='formfeedback.php?=".$row['course-teacher1_bool'].">".$row["course-teacher1_id"]."</a></td></tr>";
                            echo "<tr><td><a href='formfeedback.php?=".$row['course-teacher2_bool'].">".$row["course-teacher2_id"]."</a></td></tr>";
                        }
                            mysqli_close($link);
                        ?>
                    </table>
				</div>
			</div>
		</div>
	</body>
</html>
