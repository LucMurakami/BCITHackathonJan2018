<?php
session_start();

$errors = array();

$database = mysqli_connect("localhost","id4166117_student","student","id4166117_student");

if (isset($_POST['login_user'])) {
    $loginID = mysqli_real_escape_string($db, $_POST['loginID']);
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
                header('location: teacher_index.php');
        }
    }
}
?>
    
