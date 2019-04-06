<?php

class mod_checktotalactive_users{
    //put your code here   
    public function showtotalsactiveusers()
    {        
          try { 
        $conn= open_db_connection();
        $sql = "SELECT count(*) as total_numberof_users FROM user";
      // attempt insert query execution
         
     $result = $conn->query($sql);
         
          return  $result;
         
          }
       catch(Exception $e) {   
  
    echo 'Message: ' .$e->getMessage();
    return "";
}
    }
   
  //put your code here   
    public function totalamount()
    {        
          try { 
        $conn= open_db_connection();
        $sql = "select sum(amount) as total_amount from subscription";
      // attempt insert query execution
         
     $result = $conn->query($sql);
         
          return  $result;
         
          }
       catch(Exception $e) {   
  
    echo 'Message: ' .$e->getMessage();
    return "";
}
    }

     public function totalnewuser()
    {        
          try { 
        $conn= open_db_connection();
        $sql = "SELECT count(*) as total_new FROM user where date between date_sub(now(), interval 15 day) and now()";
      // attempt insert query execution
         
     $result = $conn->query($sql);
         
          return  $result;
         
          }
       catch(Exception $e) {   
  
    echo 'Message: ' .$e->getMessage();
    return "";
}
    }
    
      public function highestinsurance()
    {        
          try { 
        $conn= open_db_connection();
        $sql = "select max(amount) as max_amount from subscription ";
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


