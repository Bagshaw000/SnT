<?php
//connect to database class
require_once("../settings/db_class.php");

/**
*Product class to handle all functions 
*/
/**
 *@author Omieibi Bagshaw
 *
 */

class product_class extends db_connection
{
	//--INSERT--//
    function select_all_product_cls(){
        $sql ="SELECT * FROM `product`";
        return $this->db_fetch_all($sql);
    }
	

	//--SELECT--//

    function insert_one_product_cls($p_name,$cat_id,$p_desc,$p_price,$p_image){
        $sql="INSERT INTO `product`(`p_name`,`cat_id`, `p_desc`, `p_price`, `p_image`) VALUES ('$p_name','$cat_id','$p_desc','$p_price','$p_image')";
        return $this->db_query($sql);   
    }

    function select_prod_id_cls($p_id){
        $sql ="SELECT * FROM `product` WHERE `p_id`='$p_id'";
        return $this->db_fetch_one($sql);
    }

    

	//--UPDATE--//

    function update_product_cls($pid,$p_name,$cat_id,$p_desc,$p_price){
        $sql="UPDATE `product` SET `p_name`='$p_name', `cat_id`='$cat_id',`p_desc`='$p_desc',`p_price`='$p_price' WHERE `p_id`='$pid'";
        return $this->db_query($sql);   
    }



	//--DELETE--//

    function delete_product_cls($p_id){
        $sql="DELETE * FROM `product` WHERE `p_id`='$p_id'";
        return $this->db_query($sql); 
    }
	

}

?>