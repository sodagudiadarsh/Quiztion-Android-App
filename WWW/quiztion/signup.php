<?php
$username=$_GET['username'];
$password=$_GET['password'];
$institution=$_GET['institution'];
$email=$_GET['email'];
$phone=$_GET['phone'];
$imageurl=$_GET['imageurl'];
include_once($_SERVER['DOCUMENT_ROOT'].'/quiztion/db.php');
$demo="SELECT COUNT(*) AS usercount FROM Users WHERE username='".$username."'";
$result1=mysqli_query($con,$demo);
$row = mysqli_fetch_array($result1);
if($row['usercount']>1)
{
    echo "[5]";
}
else
{
    $query="INSERT INTO Users (user_id, username, password, institution, email, phone, imageurl) VALUES (NULL, '".$username."','".$password."', '".$institution."', '".$email."', '".$phone."', '".$imageurl."');";
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

?>