<?php
$dbHost="localhost";
/*$dbUser="root";
$dbPass="root";*/
$dbUser="quiztion";
$dbPass="quiztion@007";
$dbName="quiztion";
$con=mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: ".mysqli_connect_error();
}
?>