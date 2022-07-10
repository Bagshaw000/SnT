<?php
//connect to database class
require("../settings/db_class.php");

/**
*Cart class to handle all functions 
*/
/**
 *@author Omieibi Bagshaw
 *
 */

class cart_class extends db_connection
{
	//--INSERT--//
    function insert_cart_cls($pid,$ip_add,$uid,$qty){
        $sql= "INSERT INTO `cart`(`p_id`, `ip_add`, `u_id`, `qty`) VALUES ('$pid','$ip_add','$uid','$qty')";
        return $this->db_query($sql);
    }
	

	//--SELECT--//
    function select_prod_cart_cls($uid){
        $sql ="SELECT * FROM `cart` inner join `product` on 	cart.p_id=product.p_id 
        inner join `user` on '  $uid'= cart.u_id";
        return $this->db_fetch_all($sql);
    }



	//--UPDATE--//

    function increase_cart_cls($pid,$cid){
        $sql = "UPDATE `cart` SET qty = (qty + 1) WHERE `p_id`='$pid' AND `c_id`='$cid'";
        return $this->db_query($sql);
    }

    function decrease_cart_cls($pid,$cid){
        $sql = "UPDATE `cart` SET qty =(qty - 1)WHERE `p_id`='$pid' AND `c_id`='$cid'";
        return $this->db_query($sql);
    }



	//--DELETE--//
    function delete_from_cart_cls($pid,$cid){
        $sql= "DELETE FROM `cart` WHERE `p_id`='$pid' AND `c_id`=$cid";

        return $this->db_query($sql);

    }
	

}

?>