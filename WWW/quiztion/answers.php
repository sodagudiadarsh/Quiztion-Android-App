<?php
$quizname=$_GET['quizname'];
include_once($_SERVER['DOCUMENT_ROOT'].'/quiztion/db.php');
$query="SELECT * FROM `QuestionBank` WHERE quizname='".$quizname."'";
$result=mysqli_query($con,$query);
$question="[";
//echo "[";
   while($row = mysqli_fetch_array($result))
    {
        $question=$question.'["'.$row['question'].'","'.$row['choice 1'].'","'.$row['choice 2'].'","'.$row['choice 3'].'","'.$row['choice 4'].'","'.$row['answer'].'"],';
        //$question=$question.'["'.$row['question'].'",';
        //echo '["'.$row['question'].'",';
        /*if($row['answer']=="A")
        {
            $question=$question.'"'.$row['choice 1'].'"';
        }
        else if($row['answer']=="B")
        {
            $question=$question.'"'.$row['choice 2'].'"';
        }
        else if($row['answer']=="C")
        {
            $question=$question.'"'.$row['choice 3'].'"';
        }
        else
        {
            $question=$question.'"'.$row['choice 4'].'"';
        }
        $question=$question."],";*/
    }
    
    $question[strlen($question)-1]=']';
    echo $question;
?>