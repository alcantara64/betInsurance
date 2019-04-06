<?php
include 'models/mod_claim_insurance.php';

class con_claim_insurance
{
    
      public function create_insurance($first_name, $last_name, $account_number, $bank_address,$amount,$currency)
     {

        try { 
            
                 // Escape user inputs for security
           
            
            $obj1 = new mod_claim_insurance();
            
         $message = $obj1->create_insurance($first_name, $last_name, $account_number, $bank_address, $amount, $currency);  
  
          }
          catch(Exception $e) {
   
   echo '<script type="text/javascript">alert("'.$e->getMessage();'");</script>';
    return 'Message: ' .$e->getMessage();
}
     }
     
     
     public function  check_claiminsurance($user_id)
    {        
    //put your code here     
        try {             

            $obj1 = new mod_claim_insurance();
            
        $result = $obj1->check_claiminsurance($user_id);
        
            
                    if ($result->num_rows > 3)
                    { 
               
                        while ($row = $result->fetch_assoc())
                        {
                              $prediction_id = $row['prediction_id'];        
                             
                             $date_uploaded = $row['date_uploaded'];
                             $conn= open_db_connection();
                              $sql4 = "SELECT prediction_id, match_status FROM predictions WHERE prediction_id ='".$prediction_id."' and match_status ='l' and date = '".$date_uploaded."' ";
                         $result2 = $conn->query($sql4);
                         if ($result2->num_rows > 3) {
                           $_SESSION['claiminsurance'] = '';      } else {
                               
                                  $_SESSION['claiminsurance'] = 'display:none'; 
          
      }  
                        }
                          
                    
                          
                    }
                                        else {
                                               $message = "You do not have any game to display yet";
                                                 return $message;
                                            }



                   
          }
          catch(Exception $e) {
   
 $message = $e->getMessage();
   return $message;
}
}
     
     
}