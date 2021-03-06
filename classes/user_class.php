<?php
//connect to database class
require_once("../settings/db_class.php");

/**
 * This class handles all the query for the user database
 * 
 * @author Omieibi Bagshaw
 */

class user_class extends db_connection
{
	//--INSERT--//
    /**
     * This function insert the user data into the database when signing up
     * @return bool
     */
    function insert_user_cls($first_name,$last_name,$email,$password){
        $sql =" INSERT INTO `users`( `f_name`, `l_name`, `email`, `password`, `u_perm`)
         VALUES ('$first_name','$last_name','$email','$password',1)";      
         return $this->db_query($sql);
    }


    function insert_admin_cls($email,$password){
        $sql = "INSERT INTO `admin`(`email`, `password`)
         VALUES ('$email','$password')";
         return $this->db_query($sql);

    }
	

	//--SELECT--//
    /**
     * This function gets the user data with that specific email
     * @return array
     */

    function select_user_cls($email){
        $sql ="SELECT * FROM `users` WHERE `email`='$email'";

        return $this->db_fetch_one($sql);
    }
    function select_admin_cls($email){
        $sql ="SELECT * FROM `admin` WHERE `email`='$email'";

        return $this->db_fetch_one($sql);
    }

    function select_user_id_cls($id){
        $sql ="SELECT * FROM `users` WHERE `u_id`='$id'";

        return $this->db_fetch_one($sql);
    }

    function select_all_user_cls(){
        $sql ="SELECT * FROM `users`";

        return $this->db_fetch_all($sql);

    }
    function select_processing_orders_cls(){
        $sql = "SELECT * FROM `orders` WHERE `order_status` = 'processing'";

        return $this->db_fetch_all($sql);

    }

    function select_delivered_orders_cls(){
        $sql = "SELECT * FROM `orders` WHERE `order_status` = 'delivered'";

        return $this->db_fetch_all($sql);

    }





	//--UPDATE--//

    /**
     * This function update the user email in the database
     * @return bool
     */

    function update_user_email_cls($email, $uid){
        $sql = "UPDATE `users` SET `email`='$email' WHERE `u_id`='$uid'";

        return $this->db_query($sql);

    }
    
	//--DELETE--//
    /**
     * This function simulate the delte property by updating the user permission
     * @return true
     */
    function delete_user_acc_cls($uid){
        $sql = "UPDATE `users` SET `user_perm`=2 WHERE `u_id`='$uid'";

        return $this->db_query($sql);
    }
	

}

?>