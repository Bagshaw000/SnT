<?php 

require("../classes/cart_class.php");

// function cleanText($data) 
// {
//   $data = trim($data);
//   //$data = stripslashes($data);
//   //$data = htmlspecialchars($data);
//   return $data;
// }
//INSERT
function insert_cart_ctr($pid,$ip_add,$uid,$qty){
    $data = new cart_class();
    if (empty($data->select_prod_ip_cls($pid, $ip_add))){
       return  $data->insert_cart_cls($pid,$ip_add,$uid,$qty);
    }
    else{
        return $data->increase_cart_cls($pid,$uid);
    }
   
}

function insert_cart_ip_ctr($pid,$ip_add,$qty){
    $data = new cart_class();
    if (empty($data->select_prod_ip_cls($pid, $ip_add))){
       return  $data->insert_cart_ip_cls($pid,$ip_add,$qty);
    }
    else{
        return $data->increase_cart_ip_cls($pid,$ip_add);
    }
   
}

//SELECT
function select_prod_cart_ctr($uid){
    $data = new cart_class();
    return $data->select_prod_cart_cls($uid);
}

function select_total_price_ctr($uid){
    $data = new cart_class();
    return $data->select_total_price_cls($uid);
}

function select_cart_count_ctr($ip_add){
    $data = new cart_class();
    return count( $data->select_cart_count_cls($ip_add));
}
function select_cart_user_ctr($ip_add){
    $data = new cart_class();
    return $data->select_cart_count_cls($ip_add);
}

//UPDATE
function increase_cart_ctr($pid,$uid){
    $data = new cart_class();
    return $data->increase_cart_cls($pid,$uid);
} 

function decrease_cart_ctr($pid,$uid){
    $data = new cart_class();
    return $data->decrease_cart_cls($pid,$uid);
}
function decrease_cart_ip_ctr($pid,$ip_add){
    $data = new cart_class();
    return $data->decrease_cart_ip_cls($pid,$ip_add);
}

//DELETE
function delete_from_cart_ctr($pid,$ip_add){
    $data = new cart_class();
    return $data->delete_from_cart_cls($pid,$ip_add);
}