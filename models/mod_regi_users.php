<?php

//require 'includes/sendsms.php';
//require 'includes/generateverifycode.php';
//require 'includes/sendemail.php';


class mod_register_user {
    //put your code here

    
    public function create_users($first_name, $last_name, $email, $passwordenc, $country, $state, $address, $city, $dob, $phone)
    {        
          try {               
//                 if ($this->checkUsername($username))
//        { 
//            return "Username already exist ".$username;
//        }   
            
          if ($this->checkEmailExist($email))
        {
               
            return "Email already exist ".$email;
        }   
             
        
         if ($this->checkPhoneExist($phone))
        {
                  
            return "Phone Number already exist ".$phone;
        }
        
          
        
        $conn= open_db_connection();
        
        $sql = "insert into user (first_name,last_name,email,password,country,state,address,"
                . "city,status,date,dob,phone,activate_status,subscription_status)"        
                . "Values('".$first_name."', '".$last_name."', '".$email."', '".$passwordenc."', '".$country."', '".$state."', '".$address."', '".$city."','y', now(),'".$dob."','".$phone."','n','unsubscribed')";
        
       if ($conn->query($sql) === TRUE) {
           $id = $conn->insert_id;
       
        echo "<script>alert('Congratulations your record was created successfully')</script>";
        
//        $obj2->sendVerifySMS($phonenumber, $verifycode);
//       
        $email_password = "tukoolbetinsurance2017!"; 
        $sender = "info@tukoolbetinsurance.com";
        $user_name = "info@tukoolbetinsurance.com";
        $recepient = $email;
        $mysubject = "Confirmation mail";
        $mymessage = '<p>Hello  '.$first_name .',<p>'
                . '<p>You recently registered on Tukoolbetinsurance. We are so glad you decided to join our platform. To complete your registration,<a href="https://tukoolbetinsurance.com/activateuser.php?id='.$id.'&password='.$passwordenc.'&email='.$email.'" > Click on this link</a>? </p>';
         $_SESSION["email"] = $email ;
         $_SESSION["first_name"] = $first_name ;
        sendEmail($sender, $recepient, $mysubject, $mymessage, $email_password,$user_name);
     
      echo "<script type='text/javascript'> document.location = 'regsucess.php'; </script>";
        
        
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

public function checkPhoneExist($phone)
    {        
          try { 
        $conn= open_db_connection();
        
      // attempt insert query execution
         $stmt = $conn->prepare("select * from user where phone = ? ");
        
        $stmt->bind_param("s",$phone);

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

public function activate_user($id,$password, $email)
    {        
          try { 
        $conn= open_db_connection();
        
        $sql = "UPDATE user SET activate_status ='y' WHERE user_id = '".$id."' and password ='".$password."' and email ='".$email."'";
        
       if ($conn->query($sql) === TRUE) {
           
        echo "Congratulations your accont have been activated successfully";
        echo "<script>alert('Congratulations your Account has been activated. Kindly Login')</script>";
         echo "<script type='text/javascript'> document.location = 'https://tukoolbetinsurance.com/login.php'; </script>";
        header('location:https://tukoolbetinsurance.com/login.php');
        
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}

$conn->close();
         
          }
          catch(Exception $e) {
   
  
    echo 'Message: ' .$e->getMessage();

}
    
}


public function update_password($id,$password, $email)
    {        
          try { 
        $conn= open_db_connection();
        
        $sql = "UPDATE user SET password ='.$password.' WHERE user_id = '".$id."' and password ='".$password."' and email ='".$email."'";
        
       if ($conn->query($sql) === TRUE) {
           
        echo "Congratulations your password have been updated successfully";
        echo "<script>alert('Congratulations your password have been updated successfully')</script>";
         echo "<script type='text/javascript'> document.location = 'https://tukoolbetinsurance.com/login.php'; </script>";
        header('location:https://tukoolbetinsurance.com/login.php');
        
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}

$conn->close();
         
          }
          catch(Exception $e) {
   
  
    echo 'Message: ' .$e->getMessage();

}
    
}



}



