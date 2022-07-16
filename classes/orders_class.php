<?php
//connect to database class
require_once("../settings/db_class.php");

/**
*Order class to handle all functions 
*/
/**
 *@author Omieibi Bagshaw
 *
 */

class orders_class extends db_connection
{
	//--INSERT--//
    function insert_orders_cls($uid,$invoice,$order_date,$order_address,$order_status){
        $sql = "INSERT INTO `orders`( `u_id`, `invoice_no`, `order_date`, `order_address`, `order_status`)
         VALUES ('$uid','$invoice','$order_date','$order_address','$order_status')";

        return $this->db_query($sql);
    }
	

	//--SELECT--//

    function select_orders_cls(){
        $sql = "SELECT * FROM `orders`";

        return $this->db_fetch_all($sql);
    }
    function get_last_order_cls(){
		$sql="SELECT `order_id` FROM `orders` ORDER BY  `order_id` DESC LIMIT  1";
		return $this->db_fetch_one($sql);
	}

   

	//--UPDATE--//



	//--DELETE--//
	

}

?>