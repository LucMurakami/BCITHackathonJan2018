<?php
session_start();

$errors = array();

$host = "localhost";
$username = "id4166117_student";
$password = "student";
$dbName = "id4166117_student";
$link = mysqli_connect($host,$username,$password,$dbName);

if (isset($_POST['login_user'])) {
    $loginID = mysqli_real_escape_string($link, $_POST['loginID']);
    $password = mysqli_real_escape_string($link, $_POST['password']);
    
    if (empty($studentID)) {
        array_push($errors, "");
    }
    if (empty($password)) {
        array_push($errors, "");
    }
    
    if (count($errors) == 0) {
        $query = "SELECT * FROM student WHERE student_id='$loginID' AND password='$password'";
        $results = mysqli_query($link, $query);
        if (mysqli_num_rows($results == 1)) {
            $_SESSION['studentID'] = $studentID;
            header('location: student_index.php');
        } else {
            $query = "SELECT * FROM teacher WHERE teacher_id='$loginID' AND password='$password'";
            $results = mysqli_query($link, $query);
            if (mysqli_num_rows($results == 1)) {
                $_SESSION['studentID'] = $studentID;
                header('location: teacher_index.php');
            } else {
                header('location: login.php');
            }
        }
    }
    mysqli_close($link);
}
?>
    