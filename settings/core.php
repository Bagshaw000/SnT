<?php
//start session
session_start(); 

//for header redirection
ob_start();

//funtion to check for login
function check_login(){
    if (!isset($_SESSION['uid'])){
        return false;
    }
    return true;
}

//function to check login on the index page
function check_login_index(){
    if (!isset($_SESSION['uid'])){
        
        return false;
    }
    return true;
}

//function to get user ID


//function to check for role (admin, customer, etc)



?>