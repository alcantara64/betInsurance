<?php



//require 'includes/sendsms.php';
//require 'includes/generateverifycode.php';
//require 'includes/sendemail.php';


class mod_claim_insurance {
    //put your code here

    
    public function create_insurance($first_name, $last_name, $account_number, $bank_address,$amount,$currency)
    {        
          try { 
              
    
        $conn= open_db_connection();
        
        $sql = "INSERT INTO insurance (first_name,last_name,bank_address,account_number,amount,currency)"
                . "Values('".$first_name."', '".$last_name."','".$bank_address."', '".$account_number."','".$amount."', '".$currency."')";
        
       if ($conn->query($sql) === TRUE) {
          
       
       echo '<script>alert("Request sent succesfully")</script>';
      
        $email_password = "tukoolbetinsurance2017!";
        $sender = "backoffice@tukoolbetinsurance.com";
        $recepient = "backoffice@tukoolbetinsurance.com";
        $mysubject = "'.$first_name .' Requested To Claim insurance";
        $mymessage = "<p>User '.$first_name .' '.$last_name .' <p>"
                . "with the following details"
                ."' Full_name:'.$first_name .' '.$last_name .'"
                . "Account Number: '.$account_number.'"
                . "Bank Address: '.$bank_address.'"
                 . "Currency: '.$currency.'"
                 . "Amount: '.$amount.'";
        sendEmail($sender, $recepient, $mysubject, $mymessage, $email_password);
        
        
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}

$conn->close();
         
          }
          catch(Exception $e) {
   
  
    echo 'Message: ' .$e->getMessage();

}
    
}

 public function check_claiminsurance($user_id)
    {        
          try { 
        $conn= open_db_connection();
        $sql = "SELECT game_id, prediction_id, user_id, date_uploaded FROM game where user_id = '".$user_id."' group by date_uploaded ";
      // attempt insert query execution
         
     $result = $conn->query($sql);
         
          return  $result;
         
          }
       catch(Exception $e) {   
  
    echo 'Message: ' .$e->getMessage();
    return "";
}
    
}




}




