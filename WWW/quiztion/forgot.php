<?php
$email=$_GET['email'];
$msg = "You forgot your password.Don't do it again";

$msg = wordwrap($msg,70);


mail($email,"Forgot Password - Quiztion",$msg);
echo "[1]";
?>