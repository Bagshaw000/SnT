<?php 

require_once("../classes/cart_class.php");

function cleanText($data) 
{
  $data = trim($data);
  //$data = stripslashes($data);
  //$data = htmlspecialchars($data);
  return $data;
}
//INSERT
function insert_cart_ctr($pid,$ip_add,$uid,$qty){
    $data = new cart_class();
    return $data->insert_cart_cls($pid,$ip_add,$uid,$qty);
}

//SELECT
function select_prod_cart_ctr($uid){
    $data = new cart_class();
    return $data->select_prod_cart_cls($uid);
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

//DELETE
function delete_from_cart_ctr($pid,$uid){
    $data = new cart_class();
    return $data->delete_from_cart_cls($pid,$uid);
}