<?php
session_start();

$errors = array();

$database = mysqli_connect('localhost', 'root', '',  'registration');

if (isset($_POST['login_user'])) {
    $loginID = mysqli_real_escape_string($db, $_POST['studentID']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    
    if (empty($studentID)) {
        array_push($errors, "");
    }
    if (empty($password)) {
        array_push($errors, "");
    }
    
    if (count($errors) == 0) {
        $query = "SELECT * FROM student WHERE studentID='$loginID' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results == 1)) {
            $_SESSION['studentID'] = $studentID;
            header('location: student_index.php');
        } else if {
            $query = "SELECT * FROM teacher WHERE teacherID='$loginID' AND password='$password'";
            $results = mysqli_query($db, $query);
            if (mysqli_num_rows($results == 1)) {
                $_SESSION['studentID'] = $studentID;
                header('location: student_index.php');
        }
    }
}
?>
    