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