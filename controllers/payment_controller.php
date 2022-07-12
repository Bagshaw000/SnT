<?php
//connect to the user account class
include("../classes/payment_class.php");

//sanitize data
function cleanText($data) 
{
  $data = trim($data);
  //$data = stripslashes($data);
  //$data = htmlspecialchars($data);
  return $data;
}

//--INSERT--//
function insert_payment_ctr($u_id, $order_id, $amt,$currency,$p_date){
    $data = new payment_class();
    return $data->insert_payment_cls($u_id, $order_id, $amt,$currency,$p_date);
}

//--SELECT--//

//--UPDATE--//

//--DELETE--//

?>