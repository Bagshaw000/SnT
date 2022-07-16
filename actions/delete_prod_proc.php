<?php
require("../controllers/product_controller.php");


$p_id = $_POST['p_id'];
echo($p_id);


if (delete_product_ctr($p_id) == 1){
echo("success");
} else{
    echo ("failed");
}

?>