<?php

//connect to the user account class
require_once("../classes/user_class.php");
require_once("../functions/function_store.php");

//sanitize data
function cleanText($data) 
{
  $data = trim($data);
  //$data = stripslashes($data);
  //$data = htmlspecialchars($data);
  return $data;
}



//--INSERT--//
/**
 * This function pass the data from the proc page in to the 
 * user class
 * @return bool
 * OR
 * @return error
 */
function insert_user_ctr($first_name,$last_name,$email,$password){
   try {
    $data = new user_class();
    $hashed = password_hash(cleanText($password),PASSWORD_BCRYPT);
    
    return $data-> insert_user_cls(cleanText($first_name),cleanText($last_name),cleanText($email),$hashed);

   } catch (Throwable $th) {
    throw $th;
   }
  
}

function insert_admin_ctr($email,$password){
    try{
        $data = new user_class();
        $hashed = password_hash(cleanText($password),PASSWORD_BCRYPT);
        return $data->insert_admin_cls($email,$hashed);
    } catch(Throwable $th){
     throw $th;   
    }
}

//--SELECT--//
/**
 * This function select the user data and check if the user exists 
 * an password are similar
 * @return null
 * OR
 * @return bool
 */

function select_user_ctr($email,$password){
    try {
        $data = new user_class();
        $user_data= $data->select_user_cls($email);
        if(empty($user_data)){
            return null;
        }elseif (verify_password($user_data['password'], $password)== false) {
            return false;
        }
        else {
            session_start();
            $_SESSION['uid']=$user_data['u_id'];
            $_SESSION['role']=$user_data['u_perm'];
            return true;
        }

    } catch (Throwable $th) {
        throw $th;
    }
}

function select_all_user_ctr(){
    try{
        $data = new user_class();
        $user_data=  $data->select_all_user_cls();
        return count($user_data);
    }
    catch(Throwable $th){
        throw $th;

    }
}
function select_admin_ctr($email,$password){
    try {
        $data = new user_class();
        $user_data= $data->select_admin_cls($email);
        if(empty($user_data)){
            return null;
        }elseif (verify_password($user_data['password'], $password)== false) {
            return false;
        }
        else {
            session_start();
            $_SESSION['aid']=$user_data['u_id'];
            return true;
        }

    } catch (Throwable $th) {
        throw $th;
    }
}

function select_user_id_ctr($id){
    $data = new user_class();
    return $user_data= $data-> select_user_id_cls($id);
}


function select_processing_orders_ctr(){
    $data = new user_class();
    return count($data->select_processing_orders_cls());
  }
  
  function select_delivered_orders_cls(){
    $data = new user_class();
    return count($data->select_delivered_orders_cls());
  }
//--UPDATE--//
/**
 * This function gets the user email and id and updates the user email
 * @return bool
 * OR
 * @return error
 */
function update_user_email_ctr($email){
    try {
        $data = new user_class();
        return  $data->update_user_email_cls($email, $_SESSION['uid']);
        
    } catch (Throwable $th) {
        throw $th;
    }

}

//--DELETE--//
/**
 * This function simulate the delete functionality by updating
 * the user permission
 * @return bool
 * OR
 * @return error
 */

function delete_user_acc_ctr(){
    try {
        $data = new user_class();

        return $data->delete_user_acc_cls($_SESSION['uid']);
    } catch (\Throwable $th) {
        throw $th;
    }
  
}

?>