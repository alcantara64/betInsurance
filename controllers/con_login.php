<?php
include 'models/mod_login.php';
include 'includes/passenc.php';
require 'includes/sendemail.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class con_login
{
    
      public function confirmLogin($email, $password)
     {
        try { 
            
          // Escape user inputs for security
            
           $passwordenc = encryptdata($password);
        
            $obj1 = new mod_login();
            
        $result = $obj1->confirmLogin($email);
      
        if ($result->num_rows > 0)
        { 
            $row = $result->fetch_assoc();  
            
             if ($email!=$row['email'])
             
                           {                               
                                  $_SESSION["loginerrormessage"] = "Email Not Found";
                                   return;                                 
                           }
                           else  if ($passwordenc!=$row['password'])
                           {                               
                                  $_SESSION["loginerrormessage"] = "Password incorrect";
                                  return;                                   
                           } 
                           else  if ($row['status']=="s")
                              {
                                 $_SESSION["loginerrormessage"] = "Your account has been suspended";
                                 return;  
                              }
                             else  if ($row['activate_status']=="n")
                              {
                                 $_SESSION["loginerrormessage"] = "Your account has not been activated";
                                 return;  
                              }
                           else
                           {   
                               $_SESSION["user_id"] = $row['user_id']; 
                               $_SESSION["email"] = $row['email']; 
                                $_SESSION["first_name"]= $row['first_name'];
                                $_SESSION["state"] = $row['state']  ; 
                               $_SESSION["phone"] = $row['phone']  ;
                               $_SESSION["last_name"] = $row['last_name'] ;
                                  $_SESSION["date"]= $row['date'];
                               
                                 $_SESSION["status"] = $row['status'] ; 
                                 
                              $_SESSION["loginsuccessmessage"] = "Welcome! ".$_SESSION["first_name"].". You logged in successfully. Kindly subscribe to view our banker games and insure your betting capital.";
                              if ($row['subscription_status']=="subscribed"){
                                $_SESSION["have_subcribed"] = 'yes';
                                header("Location:login/dashboard.php"); 
                                 echo "<script type='text/javascript'> document.location = 'login/dashboard.php'; </script>";
                              } else {
                                  echo "<script type='text/javascript'> document.location = 'login/subscription.php'; </script>";
                              }
                                 
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
     public function ressetpassword($email)
     {
        try { 
            
        
            
          
        
            $obj1 = new mod_login();
            
        $result = $obj1->ressetpassword($email);
      
        if ($result->num_rows > 0)
        { 
            $row = $result->fetch_assoc();  
            
             if ($email!=$row['email'])
             
                           {                                          
                                  $_SESSION["loginerrormessage"] = "Email  Not Found On Our System";
                                   return;                                 
                           }
                          
                           else
                           {   
                               $id = $row['user_id'];
                               
                                
                                $email_password = "tukoolbetinsurance2017!"; 
        $sender = "info@tukoolbetinsurance.com";
        $user_name = "info@tukoolbetinsurance.com";
        $recepient = $email;
        $resetpassword =substr(hash('sha512', rand()), 0, 12);
       if( $obj1->updatePassword($email, encryptdata($resetpassword))){
        $mysubject = "Reset Link";
        $mymessage = '<h2 >Password reset rquest</h2>'
                . '<p>You requested for a password change, here is your new password: '.$resetpassword.'</p>';
       
        sendEmail($sender, $recepient, $mysubject, $mymessage, $email_password,$user_name);
                     
      
        $_SESSION["success"] = "We have sent your password to the email you provided";
                           }
                           else{
           $_SESSION["loginerrormessage"] = "There is a problem with the system try again later";
                                   return;      
                           }
                           
       }
                           }else
                            {                                      
                                  $_SESSION["loginerrormessage"] = "Email  Not Found On Our System";
                                   return;                                 
                           }
        }
   
          catch(Exception $e) {
   
  $_SESSION["loginerrormessage"] = '<script type="text/javascript">alert("'.$e->getMessage();'");</script>';
    return; 
}
     }
}