<?php
include ("../controllers/user_controller.php");

$email= $_POST["email"];
$pass= $_POST["pass"];


insert_admin_ctr($email,$pass);