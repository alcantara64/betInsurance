<?php

class suspend_acounts{
    //put your code here


public function suspend_users()
{
    try
    {   
        $conn= open_db_connection();        
        mysqli_autocommit($conn,FALSE);       
                       
        $sql = "select user_id, subscription_id from subscription where subscription_status='subscribed' and datediff(curdate(), date_suscribed) >= 30 ";
        $result = $conn->query($sql);
        echo $sql."<br>";   
        
        if ($result->num_rows > 0) {
    // output data of each row
                while($row = $result->fetch_assoc()) {

                    $subscription_id = $row['subscription_id'];        
        
                     $user_id = $row['user_id'];
                     

                            $sql4 = "update user set subscription_status = 'unsubscribed' where user_id = ? ";
                             echo $sql4."<br>";
                            if (!$stmt = $conn->prepare($sql4))
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

                            echo '<br>';
                          $sql5 = "update subscription set subscription_status = 'unsubscribed' where user_id = ? ";
                             echo $sql5."<br>";
                            if (!$stmt = $conn->prepare($sql5))
                            {
                                return "Prepare Error1: (" . $conn->errno . ") " . $conn->error." Script 3";
                            }
                            if (!$stmt->bind_param("i", $subscription_id))
                            {
                                return "Binding Parameter Error: (" . $conn->errno .") " . $conn->error;
                            }

                            if(!$stmt->execute())
                            {
                                return 'Execute Error: (' . $stmt->errno . ') ' . $stmt->error;
                            }
                            
                             
                }
                                mysqli_commit($conn);
                                    $stmt->close();
        $conn->close();
        
                               
                            }                          
   
    
   
         return "Done";
        
        }  
        
    catch(Exception $e) {   
  
    echo 'Message: ' .$e->getMessage();
    return $e->getMessage();
}
}



}
