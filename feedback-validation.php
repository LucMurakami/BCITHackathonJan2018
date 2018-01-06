<?php
session_start();


$errors = array();

$host = "localhost";
$username = "id4166117_student";
$password = "student";
$dbName = "id4166117_student";
$link = mysqli_connect($host,$username,$password,$dbName);
extract($_POST);
$id = $_SESSION["feedback-push"];
       // echo $id."  ".$answer1.$answer2.$answer3.$answer4.$answer5.$answer6.$answer7.$answer8.$answer9.$comment;
        $query = "INSERT INTO `feedback`(`course-teacher_id`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`) VALUES ('$id',$answer1,$answer2,$answer3,$answer4,$answer5,$answer6,$answer7,$answer8,$answer9,'$comment')";
        $results = mysqli_query($link, $query);
        $loginID = $_SESSION["studentID"];
       mysqli_close($link);
       
       
       $link = mysqli_connect($host,$username,$password,$dbName);
        $query = "SELECT * FROM student_courses WHERE student_id ='$loginID'";
		$results = mysqli_query($link, $query);
		$row = mysqli_fetch_array($results, MYSQLI_ASSOC);
        if(strcmp($id,$row['course-teacher1_id'])==0){
           $query ="UPDATE `student_courses` SET `course-teacher1_bool`=1 where `student_id` = '".$loginID."'";
        }
        if(strcmp($id,$row['course-teacher2_id'])==0){
           $query ="UPDATE `student_courses` SET `course-teacher2_bool`=1 where `student_id` = '".$loginID."'";
           
        }
        $results = mysqli_query($link, $query);
mysqli_close($link);


 header('location: studentIndex.php');
?>
    