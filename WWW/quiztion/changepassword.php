<?php
$userid=$_GET['userid'];
$oldpassword=$_GET['oldpassword'];
$newpassword=$_GET['newpassword'];
include_once($_SERVER['DOCUMENT_ROOT'].'/quiztion/db.php');
$query="UPDATE `Users` SET `password`='".$newpassword."' WHERE user_id=".$userid." AND password='".$oldpassword."'";
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