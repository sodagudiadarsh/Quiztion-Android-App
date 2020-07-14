<?php
$userid=$_GET['userid'];
include_once($_SERVER['DOCUMENT_ROOT'].'/quiztion/db.php');
$query="SELECT * FROM Users WHERE user_id=".$userid;
$result=mysqli_query($con,$query);
    $row = mysqli_fetch_array($result);
    $a2=$row['username'];
    $a3=$row['password'];
    $a4=$row['institution'];
    $a5=$row['email'];
    $a6=$row['phone'];
    echo '["'.$a2.'","'.$a3.'","'.$a4.'","'.$a5.'","'.$a6.'"]';
?>