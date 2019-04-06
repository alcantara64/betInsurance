<?php

class mod_show_unsub{
    //put your code here   
    public function shownonsubcribe()
    {        
          try { 
        $conn= open_db_connection();
        
        
        $sql = "SELECT first_name, last_name, email,phone, date from user where activate_status = 'y' and status ='y' and subscription_status = 'unsubscribed'";
      // attempt insert query execution
         
     $result = $conn->query($sql);
         
          return  $result;
         
          }
       catch(Exception $e) {   
  
    echo 'Message: ' .$e->getMessage();
    return "";
}
    }
   
 public function paging()
    {        
          try { 
        $conn= open_db_connection();
        
        
        $sql = "SELECT count(user_id) from user where activate_status = 'y' and status ='y' and subscription_status = 'unsubscribed'";
      // attempt insert query execution
         
     $result = $conn->query($sql);
         $row = mysqli_num_rows($result);
                 $rows = $row[0];
          return  $rows;
         
          }
       catch(Exception $e) {   
  
    echo 'Message: ' .$e->getMessage();
    return "";
}
    }

}


