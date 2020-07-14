<?php
$topic=$_GET['topic'];
$quizname=$_GET['quizname'];
$question=$_GET['question'];
$choice1=$_GET['choice1'];
$choice2=$_GET['choice2'];
$choice3=$_GET['choice3'];
$choice4=$_GET['choice4'];
$answer=$_GET['answer'];
include_once($_SERVER['DOCUMENT_ROOT'].'/quiztion/db.php');
$initialcheck="SELECT quizname FROM Quiz WHERE quizname='".$quizname."'";
//echo $initialcheck;
$result0=mysqli_query($con,$initialcheck);
if($result0)
{
    $row = mysqli_num_rows($result0);
    if($row==0)
    {
        $query1="SELECT topic_id FROM `Discover` WHERE title='".$topic."'";
        $result1=mysqli_query($con,$query1);
        $row1 = mysqli_fetch_array($result1);
        $topicid=$row1['topic_id'];
        $query2="INSERT INTO Quiz VALUES ('".$topicid."', '".$quizname."')";
        $result2=mysqli_query($con,$query2);
    }
}
$query="INSERT INTO QuestionBank VALUES ('".$quizname."', '".$question."','".$choice1."', '".$choice2."', '".$choice3."', '".$choice4."', '".$answer."')" ;
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