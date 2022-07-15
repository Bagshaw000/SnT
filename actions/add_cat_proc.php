<?php
require_once("../controllers/category_controller.php");
$cat_name=$_POST["cat_name"];

insert_cat_ctr($cat_name);
echo ("success");