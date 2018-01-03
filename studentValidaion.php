<?php
session_start();
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
