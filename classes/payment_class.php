<?php
//connect to database class
require("../settings/db_class.php");

/**
*Payment class to handle all functions 
*/
/**
 *@author Omieibi Bagshaw
 *
 */

class payment_class extends db_connection
{
	//--INSERT--//
	function insert_payment_cls($u_id, $order_id, $amt,$currency,$p_date){
        $sql ="INSERT INTO `payment`( `u_id`, `order_id`, `amount`, `currency`, `payment_date`)
         VALUES ('$u_id','$order_id','$amt','$currency','$p_date')";

         return $this-db_query($sql);
    }

	//--SELECT--//



	//--UPDATE--//



	//--DELETE--//
	

}

?>