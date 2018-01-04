<?php
session_start();
<<<<<<< HEAD

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
    
=======
extract($_POST);

$loginError = true;
$loginErrorMsg = "Login error, please try again.";
/*Link to database
$credentialsFile = "credentials/credentials.config";
$credentials = file($credentialsFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
*/
$iter = 0;
if(isset($user) && isset($password) && !empty($user) && !empty($password)) {
    $userExists = false;
    $loginError = true;
    $loginErrorMsg = "User does not exist.";
    foreach($credentials as $credential){
        $userCredential[$iter] = explode(", ", $credentials[$iter]);
        if($userCredential[$iter][0] == $user) {
            if($userCredential[$iter][1] == $password) {
                $loginErrorMsg = null;
                $loginError = false;
            }
            else{
                $loginErrorMsg = "Password does not match.";
            }
            $userExists = true;
        }
        $iter++;
    }
}
else {
    $loginError = true;
    $loginErrorMsg = "Please enter user and password.";
}
if($loginError){
    $_SESSION['loginErrorMsg'] = $loginErrorMsg;
    header('location: login.php');
}
else {
    header('location: studentIndex.php');
}
?>
>>>>>>> 778e358d7373f11835b4238b681543a729381161
