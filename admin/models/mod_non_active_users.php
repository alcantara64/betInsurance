<?php

class mod_non_active_users{
    //put your code here   
    public function shownonactiveusers()
    {        
          try { 
        $conn= open_db_connection();
        $sql = "SELECT first_name, last_name, email,phone, date from user where activate_status = 'n' and status ='y' order by date desc ";
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

