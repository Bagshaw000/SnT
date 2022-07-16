<?php

/**
 * This function verifies the password of the user during login
 * @return  bool
 */
function verify_password($hash_password, $password){
    $verify = password_verify($password, $hash_password);

    if ($verify){
        return true;
    }
    else{
        return false;
    }
}

function upload_file($directory,$subdir,$tempname,$image){
    //check if the directory exists 
    //Then upload the file into the directory
    $folder = "../$directory/$subdir/".$image;
    if (!file_exists("../$directory/$subdir/")){
        @mkdir("../$directory/$subdir/",0777);
       
        echo("Folder created");
        move_uploaded_file($tempname,$folder);
        return $folder;
    }
    else{
        move_uploaded_file($tempname,$folder); 
        return $folder;
    }
    return false;
   
}

function get_ip_add(){
    return $_SERVER['REMOTE_ADDR'];
}