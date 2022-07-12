<?php
include ("../classes/category_class.php");

function cleanText($data) 
{
  $data = trim($data);
  //$data = stripslashes($data);
  //$data = htmlspecialchars($data);
  return $data;
}

//INSERT
function insert_cat_ctr($cat_name){
    $data = new category_class();
    $data->insert_cat_cls($cat_name);
}

//SELECT
function select_one_cat_ctr($cat_id){
    $data = new category_class();
    $data->select_one_cat_cls($cat_id);
}

function select_all_cat_ctr(){
    $data = new category_class();
    $data->select_all_cat_cls();
}

//UPDATE
function update_cat_ctr($cat_id,$cat_name){
    $data = new category_class();
    $data->update_cat_cls($cat_id,$cat_name);
}

//DELETE
function delete_cat_cls($cat_id){
    $data = new category_class();
    $data->delete_cat_cls($cat_id);
}