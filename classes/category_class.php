<?php
//connect to database class
require("../settings/db_class.php");

/**
*Category class to handle all functions 
*/
/**
 *@author Omieibi Bagshaw
 *
 */

class category_class extends db_connection
{
	//--INSERT--//
    function insert_cat_cls($cat_name){
        $sql= "INSERT INTO `categories`(`cat_name`) VALUES ('$cat_name')";
        return $this->db_query($sql);   
    }
	

	//--SELECT--//
    function select_one_cat_cls($cat_id){
        $sql= "SELECT * FROM `categories` WHERE `cat_id` ='$cat_id'";
        return  $this->db_fetch_one($sql);
    }

    function select_all_cat_cls(){
        $sql = "SELECT * FROM `categories`";
        return  $this->db_fetch_all($sql);
    }



	//--UPDATE--//
    function update_cat_cls($cat_id,$cat_name){
        $sql= "UPDATE `categories` SET `cat_name`='$cat_name' WHERE `cat_id`='$cat_id'";
        return  $this->db_query($sql);
    }



	//--DELETE--//
    function delete_cat_cls($cat_id){
        $sql="DELETE FROM `categories` WHERE `cat_id`='$cat_id'";
        return $this->db_query($sql); 
    }
	

}

?>