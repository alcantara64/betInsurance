<?php


class mod_login_admin{
    //put your code here

    
    public function confirmLogin_admin($email)
    {        
          try { 
        $conn= open_db_connection();
        
      // attempt insert query execution
         $stmt = $conn->prepare("select admin_id,first_name,last_name,email,admin_password from admin where email = ? ");
        
        $stmt->bind_param("s",$email);

        $stmt->execute();
 
         $result = $stmt->get_result();
         
          return  $result;
         
          }
       catch(Exception $e) {
   
  
    echo 'Message: ' .$e->getMessage();
   
}
    
}
}