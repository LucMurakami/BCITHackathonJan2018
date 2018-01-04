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

   $query = "SELECT  * from student ";
   $query1 = "select * from feedback where course-teacher_id = 'COMP1510-A0010110'";
  	$results = mysqli_query($link, $query);
  	echo "<b>student</b> <br/>";
  	while($row = mysqli_fetch_array($results, MYSQLI_ASSOC))
        {
            echo $row["student_id"]." ",$row["password"]."<br />";
        }
mysqli_close($link);
?>