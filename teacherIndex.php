<?php 
session_start(); 
if(!isset($_SESSION['teacherID'])){
    $_SESSION['errormsg'] = "Login First"; 
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Teacher Home</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
		<link href="stylesheet/style.css" rel="stylesheet">
	</head>
	<body>
	
		<div class="container">	
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
					<h1 id ="title">Profile
					<a href="logout.php" class="btn btn-default logout" type="submit" name="logout" value="Logout">Logout</a> 
					</h1>
                   

					<table class ="table ">
					    <tr>
					        <th style="text-align: center ">
					            My Courses
					        </th>
					    </tr>
                        <?php 
                        $host = "localhost";
						$username = "id4166117_student";
						$password = "student";
						$dbName = "id4166117_student";
						$link = mysqli_connect($host,$username,$password,$dbName);
						
						$loginID = $_SESSION['teacherID'];
						/* Select queries return a result set */
                        
							$query = "SELECT * FROM teacher_courses WHERE teacher_id ='$loginID'";
                            
							$results = mysqli_query($link, $query);
							$row = mysqli_fetch_array($results, MYSQLI_ASSOC);
							
							$flag = "COMP1510" . "-".$loginID;
							echo "<tr>
									<td id= 'something'>
									<a  href='stats.php?q=".$flag."'>
									COMP1510
									</a>
									</td>
								  </tr>";
						
							mysqli_close($link);
							
                        ?>
                    </table>
				</div>
			</div>
		</div>
	</body>
</html>
