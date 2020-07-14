<?php
$userid=$_GET['userid'];
$username=$_GET['username'];
$password=$_GET['password'];
$institution=$_GET['institution'];
$email=$_GET['email'];
$phone=$_GET['phone'];
include_once($_SERVER['DOCUMENT_ROOT'].'/quiztion/db.php');
$query="UPDATE Users SET `password`='".$password."',`institution`='".$institution."',`email`='".$email."',`phone`='".$phone."' WHERE user_id=".$userid." AND username='".$username."'";
$result=mysqli_query($con,$query);
if($result)
{
    echo "[1]";
}
else
{
    echo "[0]";
}
?>