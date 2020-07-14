<?php
$quizname=$_GET['quizname'];
include_once($_SERVER['DOCUMENT_ROOT'].'/quiztion/db.php');
$query="SELECT * FROM `QuestionBank` WHERE quizname='".$quizname."'";
$result=mysqli_query($con,$query);
$question="[";
   while($row = mysqli_fetch_array($result))
    {
        $question=$question.'["'.$row['question'].'","'.$row['choice 1'].'","'.$row['choice 2'].'","'.$row['choice 3'].'","'.$row['choice 4'].'","'.$row['answer'].'"],';
        
    }
    
    $question[strlen($question)-1]=']';
    echo $question;
?>