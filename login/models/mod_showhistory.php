<?php


class mod_game_history{
    //put your code here   
    public function showGameHistory($user_id)
    {        
          try { 
        $conn= open_db_connection();
        $sql = "SELECT game_id, prediction_id, user_id, date_uploaded FROM game where user_id = '".$user_id."' group by date_uploaded desc";
      // attempt insert query execution
         
     $result = $conn->query($sql);
         
          return  $result;
         
          }
       catch(Exception $e) {   
  
    echo 'Message: ' .$e->getMessage();
    return "";
}
    
}


}
