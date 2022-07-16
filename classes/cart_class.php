<?php
//connect to database class
require_once("../settings/db_class.php");

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

    function insert_cart_ip_cls($pid,$ip_add,$qty){
        $sql= "INSERT INTO `cart`(`p_id`, `ip_add`, `qty`) VALUES ('$pid','$ip_add','$qty')";
        return $this->db_query($sql);
    }
	

	//--SELECT--//
    function select_prod_cart_cls($uid){
        $sql ="SELECT * FROM `cart` inner join `product` on 	cart.p_id=product.p_id 
        inner join `users` on '  $uid'= cart.u_id";
        return $this->db_fetch_all($sql);
    }

    function select_total_price_cls($uid){
        $sql = "SELECT SUM(product.p_price * cart.qty) FROM `cart` INNER JOIN `product` on cart.p_id = product.p_id WHERE cart.u_id ='$uid'";

		return $this->db_fetch_one($sql);
    }

    function select_prod_ip_cls($pid, $ip_add){
        $sql ="SELECT * FROM `cart` WHERE `ip_add`='$ip_add' AND `p_id`='$pid'";
        return $this->db_fetch_all($sql);
    }

    function select_cart_count_cls($ip_add){
        $sql ="SELECT * FROM `cart` WHERE `ip_add`='$ip_add'";
        return $this->db_fetch_all($sql);

    }


	//--UPDATE--//

    function increase_cart_cls($pid,$uid){
        $sql = "UPDATE `cart` SET qty = (qty + 1) WHERE `p_id`='$pid' AND `u_id`='$uid'";
        return $this->db_query($sql);
    }
    function increase_cart_ip_cls($pid,$ip_add){
        $sql = "UPDATE `cart` SET qty = (qty + 1) WHERE `p_id`='$pid' AND `ip_add`='$ip_add'";
        return $this->db_query($sql);
    }

    function decrease_cart_cls($pid,$uid){
      
        $sql = "UPDATE `cart` SET qty =(qty - 1)WHERE `p_id`='$pid' AND `u_id`='$uid'";
        return $this->db_query($sql);
    }

    function decrease_cart_ip_cls($pid,$ip_add){
        $data= $this->select_prod_ip_cls($pid, $ip_add);
       
        if($data[0]['qty']==1){
          return   $this->delete_from_cart_cls($pid,$ip_add);
        }
        else{
        $sql = "UPDATE `cart` SET qty = (qty - 1) WHERE `p_id`='$pid' AND `ip_add`='$ip_add'";
        return $this->db_query($sql);}
    }




	//--DELETE--//
    function delete_from_cart_cls($pid,$ip_add){
        $sql= "DELETE FROM `cart` WHERE `p_id`='$pid' AND `ip_add`='$ip_add'";
        return $this->db_query($sql);

    }
	

}

?>