<?php

include 'controllers/con_subscribe.php';
if (isset($_POST['amount'])&&isset($_POST['user_id'])&&isset($_GET['reference'])) {
    $amount = $_POST['amount']/100;
    $reference = $_GET['reference'];
    $user_id = $_POST['user_id']; 
   
$result = array();
//The parameter after verify/ is the transaction reference to be verified
$url = 'https://api.paystack.co/transaction/verify/' + $reference;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt(
  $ch, CURLOPT_HTTPHEADER, [
    'Authorization: sk_live_34f2db0b5b39faa5a67002579555279c4fba5064']
);
$request = curl_exec($ch);
if(curl_error($ch)){
 echo 'error:' . curl_error($ch);
 }
curl_close($ch);

if ($request) {
  $result = json_decode($request, true);
}

if (array_key_exists('data', $result) && array_key_exists('status', $result['data']) && ($result['data']['status'] === 'success')) {
  
	//Perform necessary action
   
    echo "Transaction was unsuccessful";
    
}else{
    $obj1 = new con_subscribe_user();
    $obj1->create_subscription($user_id, $amount, $reference);

}  

}
