<?php
require("../functions/function_store.php");
require("../controllers/product_controller.php");

$price =(int) $_POST['p_price'];
$desc= $_POST['p_desc'];
$name = $_POST['p_name'];
$cat = $_POST['p_cat'];

$image = $_FILES["p_image"]["name"];


$tmp = $_FILES["p_image"]["tmp_name"];

$folderpath=upload_file("images","product",$tmp,$image);
if (insert_one_product_ctr($name,$cat,$desc,$price,$folderpath) == 1){
    echo ("success");
};

