<?php
include 'models/mod_regi_users.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class con_register_user
{
    
      public function create_events($first_name, $last_name, $email, $password, $country, $state, $address, $city,$dob, $phone)
     {

        try { 
            
                 // Escape user inputs for security
           
            
            $obj1 = new mod_register_user();
            
         $message = $obj1->create_users($first_name, $last_name, $email, $password, $country, $state, $address, $city, $dob, $phone);       
       
     
       $_SESSION["loginerrormessage"] = $message;              
  
              
          }
          catch(Exception $e) {
   
   echo '<script type="text/javascript">alert("'.$e->getMessage();'");</script>';
    return 'Message: ' .$e->getMessage();
}
     }
     
     
      public function activate_user($id,$password,$email)
     {

        try { 
            
                 // Escape user inputs for security
           
            
            $obj1 = new mod_register_user();
            
         $message = $obj1->activate_user($id, $password, $email);     
       
     
       $_SESSION["loginerrormessage"] = $message;              
  
              
          }
          catch(Exception $e) {
   
   echo '<script type="text/javascript">alert("'.$e->getMessage();'");</script>';
    return 'Message: ' .$e->getMessage();
}
     }
        public function update_password($id,$password,$email)
     {

        try { 
            
                 // Escape user inputs for security
           
            
            $obj1 = new mod_register_user();
            
         $message = $obj1->update_password($id, $password, $email);  
       
     
       $_SESSION["loginerrormessage"] = $message;              
  
              
          }
          catch(Exception $e) {
   
   echo '<script type="text/javascript">alert("'.$e->getMessage();'");</script>';
    return 'Message: ' .$e->getMessage();
}
     }
}
    

