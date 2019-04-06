<?php



class mod_unknown_status{
    //put your code here   
    public function showunknownGames()
    {        
          try { 
        $conn= open_db_connection();
        $sql = "SELECT prediction_id, bet_type, match_type,date,prediction  FROM predictions WHERE match_status = 'u'";
      // attempt insert query execution
         
     $result = $conn->query($sql);
         
          return  $result;
         
          }
       catch(Exception $e) {   
  
    echo 'Message: ' .$e->getMessage();
    return "";
}
    }
   
  public function showunknownnormalGames()
    {        
          try { 
        $conn= open_db_connection();
        $sql = "SELECT normal_games_id, bet_type, match_type,date,prediction  FROM normal_games WHERE match_status = 'u'";
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

       
?>