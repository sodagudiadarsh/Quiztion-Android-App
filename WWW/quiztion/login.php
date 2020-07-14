<?php
$username=$_GET['username'];
$password=$_GET['password'];
include_once($_SERVER['DOCUMENT_ROOT'].'/quiztion/db.php');
$query="SELECT user_id,username,email FROM Users WHERE username='".$username."' AND password='".$password."';";
$result=mysqli_query($con,$query);
    $row = mysqli_fetch_array($result);
    $id=$row['user_id'];
    $username=$row['username'];
    $email=$row['email'];
    echo "[".$id.',"'.$username.'","'.$email.'"]';
?>