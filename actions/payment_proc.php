<?php
require_once("../controllers/orders_controller.php");
require_once("../controllers/cart_controller.php");
require_once("../controllers/order_details_controller.php");
require_once("../controllers/payment_controller.php");
require_once("../functions/function_store.php");
session_start();
$email = $_POST["email"];
$amt= $_POST["amount"];
$ref=$_POST["ref"];
$res=$_POST["res"];
$order_stat=$_POST["o_stat"];
$bill_add=$_POST["bill_add"];
$date= date("Y/m/d");
$uid= $_SESSION['uid'];

//inserting into the orders table
insert_orders_ctr($uid,$ref,$date,$bill_add,$order_stat);


$order = get_last_order_ctr();
$cart=select_cart_user_ctr(get_ip_add());


foreach ( $cart as $item){
    insert_order_details_ctr($order['order_id'],$item['p_id'],$item['qty']);
    // remove_item_by_customer_ctrl($item['book_id'],$item['user_id']);
    delete_from_cart_ctr($item['p_id'],get_ip_add());
}
insert_payment_ctr($_SESSION['uid'], $order['order_id'], $amt,"GHS",$date);




$url = "https://api.paystack.co/transaction/initialize";
$fields = [
  'email' => $email,
  'amount' =>  $amt
];
$fields_string = http_build_query($fields);
//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, true);
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Authorization: sk_test_57625a96c308e8eacdccf1ceb20175b5f1a3c054",
  "Cache-Control: no-cache",
));

//So that curl_exec returns the contents of the cURL; rather than echoing it
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 
$result = curl_exec($ch);
echo $result;

//execute post
$result = curl_exec($ch);
echo $result;
$curl = curl_init();
  
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.paystack.co/transaction/verify/:$ref",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Authorization: Bearer SECRET_KEY",
    "Cache-Control: no-cache",
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}