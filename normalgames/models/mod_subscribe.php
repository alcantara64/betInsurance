<?php
include '../includes/connectdb.php';

class mod_subcribe_user {
    //put your code here

    
    public function create_subscription($user_id, $amount, $reference)
    {        
          try { 
              
             
              
        
          
        
        $conn= open_db_connection();
        
        $sql = "insert into subscription (amount,date_suscribed,subscription_status,user_id,payement_refrence)"        
                . "Values('".$amount."', now(), 'subscribed', '".$user_id."', '".$reference."')";
        
       if ($conn->query($sql) === TRUE) {
         
        $sql2 = "UPDATE user SET subscription_status='subscribed' WHERE user_id= ? ";
        
        if (!$stmt = $conn->prepare($sql2))
                            {
                                return "Prepare Error1: (" . $conn->errno . ") " . $conn->error." Script 2";
                            }
                            if (!$stmt->bind_param("i", $user_id))
                            {
                                return "Binding Parameter Error: (" . $conn->errno .") " . $conn->error;
                            }

                            if(!$stmt->execute())
                            {
                                return 'Execute Error: (' . $stmt->errno . ') ' . $stmt->error;
                            }
                              header('location:../login.php');
                            echo 'successfull';
                            
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}

$conn->close();
         
          }
          catch(Exception $e) {
   
  
    echo 'Message: ' .$e->getMessage();

}
    
}
 public function update_user_subscription($user_id)
    {        
          try { 
              
             
              
        
          
        
        $conn= open_db_connection();
        
        $sql = "UPDATE user SET activate_status ='y' WHERE user_id ='".$user_id."'";
        
       if ($conn->query($sql) === TRUE) {
         
        
        
       
      
        $sender = "info@betkoolinsurance.com";
        $recepient = "info@betkoolinsurance.com";
        $mysubject = "Successfully Registration";
        $mymessage = '<p>Hey "'.$_SESSION["first_name"].'" <p>'
                . '<p>Your Subcription was successful..You Can now login to see your Banker Games </p>';
               
       
        
        sendEmail($sender, $recepient, $mysubject, $mymessage);
         header('location:dashboard.php');
       echo "<script type='text/javascript'> document.location = 'login/dashboard.php'; </script>";
        
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}

$conn->close();
         
          }
          catch(Exception $e) {
   
  
    echo 'Message: ' .$e->getMessage();

}
    
}

}

