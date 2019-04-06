<?php




/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class mod_creategames {
    //put your code here

    
    public function create_games($bet_type, $match_type,  
                     $odds, $prediction)
    {        
          try { 
              
         
             
        $conn= open_db_connection();
        
        $sql = "INSERT INTO predictions(bet_type,match_type,match_status,date,odds,draft,prediction)VALUES('".$bet_type."','".$match_type."','u',now(),'".$odds."','y','".$prediction."')";
       
       if ($conn->query($sql) === TRUE) {
           $last_id = $conn->insert_id;
          
                  echo '<script>alert("'.$last_id.'")</script>'; 
              $sql3 = "select prediction_id,date from predictions where prediction_id = '".$last_id."'";   
                   
                       $result2 =  $conn->query($sql3); 
                       
                       if ($result2->num_rows > 0) {
                           $row = mysqli_fetch_assoc($result2);
                           $prediction_id = $row["prediction_id"];
                           $date = $row["date"];
                             echo '<script>alert("'.$date.'")</script>'; 
       $sql2 = "select user_id from user where status ='y' and subscription_status = 'subscribed' and activate_status = 'y'";
     
       $result3 = $conn->query($sql2);
                if($result3->num_rows > 0){
               while ($row = mysqli_fetch_assoc($result3)){
       $sql5 = "INSERT INTO game(prediction_id, user_id,date_uploaded)VALUES(".$last_id.",'".$row['user_id']."','".$date."')";
              
              if($conn->query($sql5) === TRUE){
              $finalresult = "game inserted sucesfully";
              }else {
    echo "Error: " . $sql5 . "<br>" . $conn->error;

}  
echo '<script>alert( "'.$finalresult.'");</script>' ;     
               }
               
           }
       
                   }

  
                     
              
       
              
                    
        
        
        
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}    
        


$conn->close();
         
          }
          catch(Exception $e) {
   
  
    echo 'Message: ' .$e->getMessage();

}
    
}

public function create_normal_games($bet_type, $match_type,  
                     $odds, $prediction)
    {        
          try { 
              
         
             
        $conn= open_db_connection();
        
        $sql = "INSERT INTO normal_games(bet_type,match_type,match_status,date,odds,draft,prediction)VALUES('".$bet_type."','".$match_type."','u',now(),'".$odds."','y','".$prediction."')";
       
       if ($conn->query($sql) === TRUE) {
           $last_id = $conn->insert_id;
          
                  echo '<script>alert("'.$last_id.'")</script>'; 
              $sql3 = "select prediction_id,date from predictions where prediction_id = '".$last_id."'";   
                   
                       $result2 =  $conn->query($sql3); 
                       
                       if ($result2->num_rows > 0) {
                           $row = mysqli_fetch_assoc($result2);
                           $prediction_id = $row["prediction_id"];
                           $date = $row["date"];
                             echo '<script>alert("'.$date.'")</script>'; 
       $sql2 = "select user_id from user where status ='y' and subscription_status = 'subscribed' and activate_status = 'y'";
     
       $result3 = $conn->query($sql2);
                if($result3->num_rows > 0){
               while ($row = mysqli_fetch_assoc($result3)){
       $sql5 = "INSERT INTO game(prediction_id, user_id,date_uploaded)VALUES(".$last_id.",'".$row['user_id']."','".$date."')";
              
              if($conn->query($sql5) === TRUE){
              $finalresult = "game inserted sucesfully";
              }else {
    echo "Error: " . $sql5 . "<br>" . $conn->error;

}  
echo '<script>alert( "'.$finalresult.'");</script>' ;     
               }
               
           }
       
                   }

  
                     
              
       
              
                    
        
        
        
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







