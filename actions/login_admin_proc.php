<?php
include ("../controllers/user_controller.php");
//Gets the data from the javascript file



$email= $_POST["email"];
$pass= $_POST["pass"];


$user_data=select_admin_ctr($email,$pass);


if($user_data == null){
    echo('null');
} elseif($user_data == false){
    echo('logindetials');
}
else{
    echo('success');
}