<?php


class mod_login{
    //put your code here

    
    public function confirmLogin($email)
    {        
          try { 
        $conn= open_db_connection();
        
      // attempt insert query execution
         $stmt = $conn->prepare("select user_id,first_name,last_name,email,country,state,address,date,password,status,phone,subscription_status,activate_status from user where email = ? ");
        
        $stmt->bind_param("s",$email);

        $stmt->execute();
 
         $result = $stmt->get_result();
         
          return  $result;
         
          }
       catch(Exception $e) {
   
  
    echo 'Message: ' .$e->getMessage();
   
}
    
}
public function ressetpassword($email)
    {        
          try { 
        $conn= open_db_connection();
        
      // attempt insert query execution
         $stmt = $conn->prepare("select user_id,first_name,last_name,email,country,state,address,date,password,status,phone,subscription_status,activate_status from user where email = ? ");
        
        $stmt->bind_param("s",$email);

        $stmt->execute();
 
         $result = $stmt->get_result();
         
          return  $result;
         
          }
       catch(Exception $e) {
   
  
    echo 'Message: ' .$e->getMessage();
   
}
    
}
public function updatePassword($email,$password)
    {        
             try { 
        $conn= open_db_connection();
        
        $sql = "UPDATE user SET password ='".$password."' WHERE email = '".email."'";
        
       if ($conn->query($sql) === TRUE) {
           
           return true;
        
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}return false;

$conn->close();
         
          }
          catch(Exception $e) {
   
  
    echo 'Message: ' .$e->getMessage();

}   
}
}