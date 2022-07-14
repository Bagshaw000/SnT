<?php
include ("../controllers/user_controller.php");
//Gets the data from the javascript file


$fname= $_POST['fname'];
$lname= $_POST['lname'];
$email= $_POST['email'];
$pass= $_POST["pass"];

insert_user_ctr($fname,$lname,$email,$pass);

echo("success");