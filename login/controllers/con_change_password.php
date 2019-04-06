<?php
include 'models/mod_change_password.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class con_change_password {    

   public function changepassword($currentpassword,$newpassword,$user_email)
{
    try
    {
    
          $obj2 = new mod_change_password();
          $result = $obj2->changepassword($currentpassword,$newpassword,$user_email);
          return $result;
    }
     catch(Exception $e) {   
  
    echo 'Message: ' .$e->getMessage();
    return $e->getMessage();
}
}


}
    