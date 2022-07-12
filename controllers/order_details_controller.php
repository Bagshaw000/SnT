<?php
//connect to the user account class
include("../classes/order_details_class.php");

//sanitize data
function cleanText($data) 
{
  $data = trim($data);
  //$data = stripslashes($data);
  //$data = htmlspecialchars($data);
  return $data;
}



//--INSERT--//
function insert_order_details_ctr($order_id,$pid,$qty){
    $data = new order_details_class();
    return $data->insert_order_details_cls($order_id,$pid,$qty);
}
//--SELECT--//

//--UPDATE--//

//--DELETE--//

?>