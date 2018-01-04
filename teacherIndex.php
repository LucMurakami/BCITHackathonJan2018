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

    $query = "SELECT * FROM teacher WHERE teacher_id = '$_SESSION[loginID]'";
  	$results = mysqli_query($link, $query);
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
		<div class="container">	
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
					<h3>Profile</h3>
                    <div class="logout">
                        <a class="btn btn-info" href="logout.php">Logout</a>
                    </div>
					<table>
                        <?php while($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
                            echo "<tr><td><a href='stats.php?=".$row['course_id'].">".$row["course_id"]."</a></td></tr>";
                        }
                            mysqli_close($link);
                        ?>
                    </table>
				</div>
			</div>
		</div>
	</body>
</html>

