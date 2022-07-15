<?php
//connect to database class
require_once("../settings/db_class.php");

/**
*Order_details class to handle all functions 
*/
/**
 *@author Omieibi Bagshaw
 *
 */

class order_details_class extends db_connection
{
	//--INSERT--//
    function insert_order_details_cls($order_id,$pid,$qty){
        $sql="INSERT INTO `order_details`(`order_id`, `p_id`, `qty`) VALUES ('$order_id','$pid','$qty')";
        return $this->db_query($sql);
    }
	

	//--SELECT--//



	//--UPDATE--//



	//--DELETE--//
	

}

?>