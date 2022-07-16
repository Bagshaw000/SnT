<?php
require("../controllers/product_controller.php");

$price =(int) $_POST['p_price'];
$desc= $_POST['p_desc'];
$name = $_POST['p_name'];
$cat = $_POST['p_cat'];
$pid = $_POST['p_id'];


if (update_product_ctr($pid,$name,$cat,$desc,$price)== 1){
    echo ("success");
}else{
    echo("failed");
};

