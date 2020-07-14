<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/quiztion/db.php');
$query="SELECT Users.username AS username,sum(Leaderboard.score)/count(Leaderboard.score) AS score FROM Users,Leaderboard WHERE Users.user_id=Leaderboard.user_id GROUP BY Users.user_id ORDER BY sum(Leaderboard.score)/count(Leaderboard.score) DESC";
$result=mysqli_query($con,$query);
$leaderboard="[";
$flag=0;
   while($row = mysqli_fetch_array($result))
    {
        $leaderboard=$leaderboard.'["'.$row['username'].'",'.$row['score'].'],';
        $flag=1;
    }
    if($flag==0)
    {
        echo "[]";
        die();
    }
    $leaderboard[strlen($leaderboard)-1]=']';
    echo $leaderboard;
?>