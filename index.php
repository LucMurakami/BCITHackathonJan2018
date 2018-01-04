<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Review</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">	
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
					<h3>Profile</h3>
					<input type="submit" name="logout" value="Logout">

					<form action="form.php" method="post">
						<ul>
							<li>
								<input type="radio" name="course" value="COMP 1510">COMP 1510<br />
								<ul>	
									<li><input type="radio" name="teacher" value="bruce">Bruce<br /></li>
									<li><input type="radio" name="teacher" value="chris">Chris<br /></li>
									<li><input type="radio" name="teacher" value="keith">Keith<br /></li>
								</ul>
							</li>
							<li>
								<input type="radio" name="course" value="COMP 1536">COMP 1536<br />
								<ul>	
									<li><input type="radio" name="teacher" value="bruce">Bruce<br /></li>
									<li><input type="radio" name="teacher" value="chris">Chris<br /></li>
									<li><input type="radio" name="teacher" value="keith">Keith<br /></li>
								</ul>
							</li>
							<li>
							<input type="radio" name="course" value="BUSA 2720">BUSA 2720<br />
							<ul>	
									<li><input type="radio" name="teacher" value="bruce">Bruce<br /></li>
									<li><input type="radio" name="teacher" value="chris">Chris<br /></li>
									<li><input type="radio" name="teacher" value="keith">Keith<br /></li>
								</ul>
							</li>
							<li>
							<input type="radio" name="course" value="COMP 1100">COMP 1100<br />
							<ul>	
									<li><input type="radio" name="teacher" value="bruce">Bruce<br /></li>
									<li><input type="radio" name="teacher" value="chris">Chris<br /></li>
									<li><input type="radio" name="teacher" value="keith">Keith<br /></li>
								</ul>
							</li>
							<li>
							<input type="radio" name="course" value="COMP 1111">COMP 1111<br />
							<ul>	
									<li><input type="radio" name="teacher" value="bruce">Bruce<br /></li>
									<li><input type="radio" name="teacher" value="chris">Chris<br /></li>
									<li><input type="radio" name="teacher" value="keith">Keith<br /></li>
								</ul>
							</li>
							<li>
							<input type="radio" name="course" value="COMP 1113">COMP 1113<br />
							<ul>	
									<li><input type="radio" name="teacher" value="bruce">Bruce<br /></li>
									<li><input type="radio" name="teacher" value="chris">Chris<br /></li>
									<li><input type="radio" name="teacher" value="keith">Keith<br /></li>
								</ul>
							</li>
							<li>
							<input type="radio" name="course" value="COMM 1116">COMM 1116<br />
							<ul>	
									<li><input type="radio" name="teacher" value="bruce">Bruce<br /></li>
									<li><input type="radio" name="teacher" value="chris">Chris<br /></li>
									<li><input type="radio" name="teacher" value="keith">Keith<br /></li>
								</ul>
							</li>
						</ul>
						<input type="submit" name="submit" value="Submit">
					</form>
				</div>
			</div>
		</div>
	</body>
</html>