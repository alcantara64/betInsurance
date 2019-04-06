<?php

//require 'includes/sendsms.php';
//require 'includes/generateverifycode.php';
//require 'includes/sendemail.php';


class mod_add_admin {
    //put your code here

   
    public function create_admin($admin_name,$email, $passwordenc, $admin_username, $role)
    {        
          try { 
              
             
              
                 if ($this->checkUsername($username))
        { 
            return "Username already exist ".$username;
        }   
            
          if ($this->checkEmailExist($email))
        {
               
            return "Email already exist ".$email;
        }   
             
        
//         if ($this->checkPhoneExist($phone))
//        {
//                  
//            return "Phone Number already exist ".$phone;
//        }
//        
          
        
        $conn= open_db_connection();
        
        $sql = "INSERT INTO admin(admin_name,admin_user,role,admin_password,admin_email)"        
                . "Values('".$admin_name."', '".$admin_username."','".$role."', '".$passwordenc."','".$email."')";
        
       if ($conn->query($sql) === TRUE) {
           $id = $conn->insert_id;
       
        echo "<script>alert('Congratulations your record was created successfully')</script>";
        
//        $obj2->sendVerifySMS($phonenumber, $verifycode);
//       
        $email_password = "tukoolbetinsurance2017!";
        $sender = "info@tukoolbetinsurance.com";
        $recepient = $email;
        $mysubject = "Confirmation mail";
        $mymessage = '<p>Hello  '.$first_name .',<p>'
                . '<p>You recently registered on Tukoolbetinsurance. We are so glad you decided to join our platform. To complete your registration,<a href="https://tukoolbetinsurance.com/activateuser.php?id='.$id.'&password='.$passwordenc.'&email='.$email.'" > Click on this link</a>? </p>';
         $_SESSION["email"] = $email ;
         $_SESSION["first_name"] = $first_name ;
        sendEmail($sender, $recepient, $mysubject, $mymessage, $email_password);
      // header("Location:https://tukoolbetinsurance.com/regsucess.php");
        //echo "<script type='text/javascript'> document.location = 'https://tukoolbetinsurance.com/regsucess.php'; </script>";
        
        
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}

$conn->close();
         
          }
          catch(Exception $e) {
   
  
    echo 'Message: ' .$e->getMessage();

}
    
}


public function checkEmailExist($email)
    {        
          try { 
        $conn= open_db_connection();
        
      // attempt insert query execution
         $stmt = $conn->prepare("select * from user where email = ? ");
        
        $stmt->bind_param("s",$email);

        $stmt->execute();
 
         $result = $stmt->get_result();
         
         $numRows = $result->num_rows;     
        
         
         if($numRows > 0) {
             return true;
            }
            else 
            {
                return false;
            }       
         
         
          }
       catch(Exception $e) {   
  
    echo 'Message: ' .$e->getMessage();
    return true;
}

}








}



