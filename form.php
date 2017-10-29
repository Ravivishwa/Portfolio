<?php
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$to='raviv.vishwakarma@gmail.com';
$subject='web form';
$msg=$name ." " . $email . " " $message;
mail($to,$subject,$msg);
?>