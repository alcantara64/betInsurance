<?php
include 'models/mod_login_admin.php';


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class con_login_admin
{
    
      public function confirmLogin_admin($email, $password)
     {
        try { 
            
          // Escape user inputs for security
        
           $passwordenc = encryptdata($password);
        
            $obj1 = new mod_login_admin();
            
        $result = $obj1->confirmLogin_admin($email);
      
        if ($result->num_rows > 0)
        { 
            $row = $result->fetch_assoc();  
            
             if ($email!=$row['email'])
             
                           {                               
                                  $_SESSION["loginerrormessage"] = "Email or password Not Found";
                                   return;                                 
                           }
                           else  if ($passwordenc!=$row['admin_password'])
                           {                               
                                  $_SESSION["loginerrormessage"] = "Password or email incorrect";
                                  return;                                   
                           } 
//                           else  if ($row['status']=="s")
//                              {
//                                 $_SESSION["loginerrormessage"] = "Your account has been suspended";
//                                 return;  
//                              }
//                             else  if ($row['activate_status']=="n")
//                              {
//                                 $_SESSION["loginerrormessage"] = "Your account has not been activated";
//                                 return;  
//                              }
                           else
                           {
                               $_SESSION["admin_id"] = $row["admin_id"]; 
                               $_SESSION["email"] = 'boss';//$row["email"]; 
                                $_SESSION["first_name"]= $row["first_name"];
                               
                               //$_SESSION["phone"] = $row['phone']  ;
                               $_SESSION["last_name"] = $row['last_name'] ;
                                  //$_SESSION["date"]= $row['date'];
                               
                                 //$_SESSION["status"] = $row['status'] ; 
                                 
                                 
                                header("Location:dashboard.php"); 
                             
                              }
        }
                            else {
                                   $_SESSION["loginerrormessage"] = "email incorrect!";
                                                              return; 
                                }

         
  
        }
       
   
          catch(Exception $e) {
   
  $_SESSION["loginerrormessage"] = '<script type="text/javascript">alert("'.$e->getMessage();'");</script>';
    return; 
}
     }
}