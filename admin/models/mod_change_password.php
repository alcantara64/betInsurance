<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class mod_change_password{
    //put your code here

    
public function changepassword($currentpassword,$newpassword,$user_email)
{
    try
    {  
        if ($this->confirmCurrentpassword($user_email)!="")
        {        
                if (encryptdata($currentpassword) != $this->confirmCurrentpassword($user_email))
                {
                    return "Your current password is not correct";
                }
        }
        
        $newpassword = encryptdata($newpassword);
        
        $conn= open_db_connection();
        $sql = "update admin set password = ? where user_email = ? ";
        
        if (!$stmt = $conn->prepare($sql))
        {
            return "Prepare Error: (" . $conn->errno . ") " . $conn->error;
        }
        if (!$stmt->bind_param("ss", $newpassword, $user_email))
        {
            return "Binding Parameter Error: (" . $conn->errno .") " . $conn->error;
        }
        
        if(!$stmt->execute())
        {
            return 'Execute Error: (' . $stmt->errno . ') ' . $stmt->error;
        }
        
        if ($stmt->affected_rows>0)
        {
        $stmt->close();
        $conn->close();
        return "Data Submitted Successfully";
        }
        else
        {
        $stmt->close();
        $conn->close();
        return "Data Not Submitted Please contact admin if issue persists";
        }
    }
    catch(Exception $e) {   
  
    echo 'Message: ' .$e->getMessage();
    return $e->getMessage();
}
}


    public function confirmCurrentpassword($user_email)
    {        
          try { 
        $conn= open_db_connection();
        
      // attempt insert query execution
         $stmt = $conn->prepare("select password from admin where user_email = ? ");
        
        $stmt->bind_param("s",$user_email);

        $stmt->execute();
 
         $result = $stmt->get_result();
         
         $numRows = $result->num_rows;
         
         $mypassword="";
         
         if($numRows > 0) {
              while($row = $result->fetch_assoc()) {
                $mypassword = $row['password'];
              }
            }
            else 
            {
                $mypassword = "";
            }
         
          return  $mypassword;
         
          }
       catch(Exception $e) {   
  
    echo 'Message: ' .$e->getMessage();
    return "";
}
    
}

}