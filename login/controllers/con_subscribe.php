<?php
include 'models/mod_subscribe.php';



class con_subscribe_user
{
    
      public function create_subscription($user_id, $amount, $reference)
     {

        try { 
            
                 // Escape user inputs for security
           
            
            $obj1 = new mod_subcribe_user();
            
         $message = $obj1->create_subscription($user_id, $amount, $reference);       
       
     
       $_SESSION["loginerrormessage"] = $message;              
  
              
          }
          catch(Exception $e) {
   
   echo '<script type="text/javascript">alert("'.$e->getMessage();'");</script>';
    return 'Message: ' .$e->getMessage();
}
     }
     
     
      
}
    



