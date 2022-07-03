<?php
//connect to the user account class
include("../classes/general_class.php");
include("../functions/function_store.php");

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
            $_SESSION['uid']=$user_data['u_id'];
            $_SESSION['role']=$user_data['user_perm'];
            return true;
        }

    } catch (Throwable $th) {
        throw $th;
    }
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