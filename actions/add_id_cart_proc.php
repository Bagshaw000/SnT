<?php

require_once("../controllers/cart_controller.php");
require_once("../functions/function_store.php");
session_start();

$p_id=$_POST['p_id'];
$ip_add=get_ip_add();
if(insert_cart_ctr($p_id,$ip_add,$_SESSION['uid'],1)==1){
echo("success");
}else{
    echo("failed");
}
?>