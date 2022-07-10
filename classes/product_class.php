<?php
//connect to database class
require("../settings/db_class.php");

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
        $sql ="SELECT `p_id`, `cat_id`, `p_desc`, `p_price`, `p_image` FROM `product`";
        return $this->db_fetch_all($sql);
    }
	

	//--SELECT--//

    function insert_one_product_cls($cat_id,$p_desc,$p_price,$p_image){
        $sql="INSERT INTO `product`(`cat_id`, `p_desc`, `p_price`, `p_image`) VALUES ('$cat_id','$p_desc','$p_price','$p_image')";
        return $this->db_query($sql);   
    }

	//--UPDATE--//

    function update_product_cls($cat_id,$p_desc,$p_price,$p_image){
        $sql="UPDATE `product` SET `cat_id`='$cat_id',`p_desc`='$p_desc',`p_price`='$p_price',`p_image`='$p_image'";
        return $this->db_query($sql);   
    }



	//--DELETE--//

    function delete_product_cls($cat_id){
        $sql="DELETE * FROM `product` WHERE `cat_id`='$cat_id'";
        return $this->db_query($sql); 
    }
	

}

?>