<?php
include 'models/mod_regi_users.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class con_add_admin 
{
    
      public function create_eventscreate_admin($admin_name,$email, $passwordenc, $admin_username, $role)
     {

        try { 
            
                 // Escape user inputs for security
           
            
            $obj1 = new mod_add_admin();
            
            
         $message = $obj1->create_admin($admin_name, $email, $passwordenc, $admin_username, $role) ;     
       
     
       $_SESSION["loginerrormessage"] = $message;              
  
              
          }
          catch(Exception $e) {
   
   echo '<script type="text/javascript">alert("'.$e->getMessage();'");</script>';
    return 'Message: ' .$e->getMessage();
}
     }
     
     
      
}
    

