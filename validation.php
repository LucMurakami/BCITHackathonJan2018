<?php
session_start();

$errors = array();

$host = "localhost";
$username = "id4166117_student";
$password = "student";
$dbName = "id4166117_student";
$link = mysqli_connect($host,$username,$password,$dbName);
if (isset($_POST['loginID'])) {
    $loginID =  $_POST['loginID'];
    $password =  $_POST['password'];
    
        $query = "SELECT * FROM student WHERE student_id='$loginID' AND password='$password'";
        $results = mysqli_query($link, $query);
        if (mysqli_num_rows($results)==1) {
            $_SESSION['studentID'] = $loginID;
            header('location: studentIndex.php');
        }
     else {
        $query = "SELECT * FROM teacher WHERE teacher_id='$loginID' AND password='$password'";
        $results = mysqli_query($link, $query);
        if (mysqli_num_rows($results)==1) {
            $_SESSION['teacherID'] = $loginID;
            header('location: teacherIndex.php');
        } 
        
    }
    
}
mysqli_close($link);
// header('location: login.php');
?>
    