<?php
//connect to the user account class
require_once("../classes/product_class.php");

//sanitize data
// function cleanText($data) 
// {
//   $data = trim($data);
//   //$data = stripslashes($data);
//   //$data = htmlspecialchars($data);
//   return $data;
// }



//--INSERT--//
function select_all_product_ctr(){
    $data = new product_class();
    return $data->select_all_product_cls();   
}

function select_prod_id_ctr($p_id){
    $data = new product_class();
    return $data->select_prod_id_cls($p_id);
}

//--SELECT--//
function insert_one_product_ctr($p_name,$cat_id,$p_desc,$p_price,$p_image){
    $data = new product_class();
    return $data->insert_one_product_cls($p_name,$cat_id,$p_desc,$p_price,$p_image);
}
//--UPDATE--//

function update_product_ctr($pid,$p_name,$cat_id,$p_desc,$p_price){
    $data = new product_class();
    return $data->update_product_cls($pid,$p_name,$cat_id,$p_desc,$p_price);
}

//--DELETE--//
function delete_product_ctr($p_id){
    $data = new product_class();
    return $data->delete_product_cls($p_id);
}
?>