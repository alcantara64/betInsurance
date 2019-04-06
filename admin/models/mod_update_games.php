<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class mod_update_games{
    //put your code here

    
public function updategames($prediction_id,$status)
{
    try
    {  
//        if ($this->confirmCurrentpassword($user_email)!="")
//        {        
//                if (encryptdata($currentpassword) != $this->confirmCurrentpassword($user_email))
//                {
//                    return "Your current password is not correct";
//                }
//        }
        
      
        
        $conn= open_db_connection();
        $sql = "update predictions set match_status = ? where prediction_id = ? ";
        
        if (!$stmt = $conn->prepare($sql))
        {
            return "Prepare Error: (" . $conn->errno . ") " . $conn->error;
        }
        if (!$stmt->bind_param("ss",  $status,$prediction_id))
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
        return "Data Not Submitted Please contact Developer on 08140103867 if issues persit";
        }
    }
    catch(Exception $e) {   
  
    return 'Message: ' .$e->getMessage();
    return $e->getMessage();
}
}


public function confirmmatchstatus($prediction_id)
    {        
          try { 
        $conn= open_db_connection();
        
      // attempt insert query execution
         $stmt = $conn->prepare("select prediction_id from prediction where match_status = ? or match_status=? ");
        
        $stmt->bind_param("s",w,l);

        $stmt->execute();
 
         $result = $stmt->get_result();
         
         $numRows = $result->num_rows;
         
         $mypassword="";
         
         if($numRows > 0) {
             return "match has already been updated Already";
            }
        
         
          }
       catch(Exception $e) {   
  
    return 'Message: ' .$e->getMessage();
    return "";
}
    
}
public function confirmnormalgamematchstatus($prediction_id)
    {        
          try { 
        $conn= open_db_connection();
        
      // attempt insert query execution
         $stmt = $conn->prepare("select normal_games_id from normal_games where match_status = ? or match_status=? ");
        
        $stmt->bind_param("s",w,l);

        $stmt->execute();
 
         $result = $stmt->get_result();
         
         $numRows = $result->num_rows;
         
         $mypassword="";
         
         if($numRows > 0) {
             return "match has already been updated Already";
            }
        
         
          }
       catch(Exception $e) {   
  
    return 'Message: ' .$e->getMessage();
    return "";
}
    
}

public function updatenormalgames($prediction_id,$status)
{
    try
    {  
//        if ($this->confirmCurrentpassword($user_email)!="")
//        {        
//                if (encryptdata($currentpassword) != $this->confirmCurrentpassword($user_email))
//                {
//                    return "Your current password is not correct";
//                }
//        }
        
      
        
        $conn= open_db_connection();
        $sql = "update normal_games set match_status = ? where normal_games_id = ? ";
        
        if (!$stmt = $conn->prepare($sql))
        {
            return "Prepare Error: (" . $conn->errno . ") " . $conn->error;
        }
        if (!$stmt->bind_param("ss",  $status,$prediction_id))
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
        return "Data Not Submitted Please contact Developer on 08140103867 if issues persit";
        }
    }
    catch(Exception $e) {   
  
    return 'Message: ' .$e->getMessage();
    return $e->getMessage();
}
}
}
