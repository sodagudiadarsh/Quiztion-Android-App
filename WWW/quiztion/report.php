<?php
$quizname=$_GET['quizname'];
$score=$_GET['score'];
$userid=$_GET['userid'];
include_once($_SERVER['DOCUMENT_ROOT'].'/quiztion/db.php');
$query="SELECT * FROM Leaderboard WHERE user_id=".$userid." AND quiz_name='".$quizname."'";
$result=mysqli_query($con,$query);
if($result)
{
    $row = mysqli_num_rows($result);
    if($row>0)
    {
        echo "[2]";
    }
    else
    {
        $query="INSERT INTO Leaderboard (user_id, quiz_name, score) VALUES ('".$userid."', '".$quizname."', '".$score."')";
        $result=mysqli_query($con,$query);
        if($result)
        {
            echo "[1]";
        }
        else
        {
            echo "[0]";
        }
    }
}

?>