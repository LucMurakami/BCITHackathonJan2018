<?php
session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
		<link href="stylesheet/style.css" rel="stylesheet">

	</head>


	<body>
	<div class="container text-center">
		<h1 id="title">Please Login</h1>
			<div id="group">
				<form action="authenticate.php" method="post">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
							Student ID: <input type="text" name="studentID" placeholder="Student ID">
						</div>
					</div>
					<br />
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
							Password: <input type="text" name="password" placeholder="Password">
						</div>
					</div>
					<br />
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
							<input type="submit" class="btn btn-default" >
						</div>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>
