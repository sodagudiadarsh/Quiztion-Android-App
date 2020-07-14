<?php
$id=$_GET['id'];
include_once($_SERVER['DOCUMENT_ROOT'].'/quiztion/db.php');
$query="SELECT * FROM `Leaderboard` WHERE user_id='".$id."'";
$result=mysqli_query($con,$query);
$performance="[";
$flag=0;
   while($row = mysqli_fetch_array($result))
    {
        $performance=$performance.'["'.$row['quiz_name'].'",'.$row['score'].'],';
        $flag=1;
    }
    if($flag==0)
    {
        echo "[]";
        die();
    }
    $performance[strlen($performance)-1]=']';
    echo $performance;
?>