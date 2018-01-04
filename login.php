<<<<<<< HEAD
<?php
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
=======
<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    	<title>Login</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style/coincount.css" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style/coincount.css" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    	<header>
            <div class="container">
                <div class="jumbotron">
                    <h1>Login</h1>
                    <br />
                </div>
            </div>    
    	</header>
        <div class="container-fluid text-center">
            <div class="row content">
                <div class="col-xs-1 sidenav">
                </div>
                <div class="col-xs-8 text-left">
                    <h2>Please login for course evaluation</h2>
                    <div style="color: red">
                        <b><?php echo $_SESSION['loginErrorMsg'] ?></b>
                    </div>
                    <form class="form-horizontal" action="trylogin.php" method="post">
                        <label for="form-name">Student ID:</label>
                        <input placeholder="user" size="30" type="text" name="user" id="form-name"><br/><br/>

                        <label for="form-name">Password:</label>
                        <input placeholder="password" size="30" type="text" name="password" id="form-name"><br/><br/>

                        <button class="btn btn-success" type="submit" name="enter" value="login">Login</button>
                    </form>
                </div>
            </div>
        </div>
	</body>
</html>
>>>>>>> 778e358d7373f11835b4238b681543a729381161
