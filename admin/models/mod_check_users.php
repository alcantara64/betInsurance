<?php



class mod_checkactive_users{
    //put your code here   
    public function showactiveusers()
    {        
          try { 
        $conn= open_db_connection();
        $sql = "select first_name, last_name, email, date as date_joined, country, state, phone, amount from users_view where status = 'y' and activate_status = 'y' and subscription_status = 'subscribed' order by date desc";
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

       
?>

