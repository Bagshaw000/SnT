<?php
//connect to the user account class
require_once("../classes/orders_class.php");

//sanitize data
// function cleanText($data) 
// {
//   $data = trim($data);
//   //$data = stripslashes($data);
//   //$data = htmlspecialchars($data);
//   return $data;
// }



//--INSERT--//
function insert_orders_ctr($uid,$invoice,$order_date,$order_address,$order_status){
    $data = new orders_class();
    return $data->insert_orders_cls($uid,$invoice,$order_date,$order_address,$order_status);
}

//--SELECT--//
function select_orders_ctr(){
    $data = new orders_class();
    return $data->select_orders_cls();   
}

function get_last_order_ctr(){
    $data = new orders_class();
    return $data->get_last_order_cls();
}

function get_orders_ctr(){
    $data = new orders_class();
    return $data-> get_orders_cls();
}

//--UPDATE--//

//--DELETE--//

?>