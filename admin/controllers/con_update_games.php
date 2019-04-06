

<?php
include 'models/mod_update_games.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class con_update_games{    

   public function updategames($prediction_id,$status)
{
    try
    {
    
          $obj2 = new mod_update_games();
          $result = $obj2->updategames($prediction_id, $status);
          
          echo $result;
    }
     catch(Exception $e) {   
  
    echo 'Message: ' .$e->getMessage();
    return $e->getMessage();
}
}
public function updatenormalgames($prediction_id,$status)
{
    try
    {
    
          $obj2 = new mod_update_games();
          $result = $obj2->updatenormalgames($prediction_id, $status);
          
          echo $result;
    }
     catch(Exception $e) {   
  
    echo 'Message: ' .$e->getMessage();
    return $e->getMessage();
}
}

}
    
