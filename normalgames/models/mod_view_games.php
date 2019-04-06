<?php



class mod_view_games{
    //put your code here   
    public function showselectedgames()
    {        
          try { 
        $conn= open_db_connection();
        $sql = "SELECT * FROM normal_games WHERE date > current_date - interval '7' day group by date desc";
      // attempt insert query execution
         
     $result = $conn->query($sql);
         
          return  $result;
         
          }
       catch(Exception $e) {   
  
    echo 'Message: ' .$e->getMessage();
    return "";
}
    }
   
 public function showselectedgamesdate()
    {        
          try { 
        $conn= open_db_connection();
        $sql = "Select normal_games_id, date from predictions where prediction_id = (select max(prediction_id) from predictions)";
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