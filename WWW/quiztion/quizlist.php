<?php
$topic=$_GET['topic'];
include_once($_SERVER['DOCUMENT_ROOT'].'/quiztion/db.php');
$query="SELECT quizname FROM Quiz WHERE topic_id=(SELECT topic_id FROM Discover WHERE title='".$topic."')";
$result=mysqli_query($con,$query);
$quiz="[";
   while($row = mysqli_fetch_array($result))
    {
        $quiz=$quiz.'"'.$row['quizname'].'",';
    }
    
    $quiz[strlen($quiz)-1]=']';
    echo $quiz;
?>