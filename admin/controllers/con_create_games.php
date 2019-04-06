<?php
include 'models/mod_admin_create_game.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class con_create_games
{
    
      public function creategames($bet_type, $match_type, 
                     $odds, $prediction) 
     {

        try { 
            
             // Escape user inputs for security
           
            
            $obj1 = new mod_creategames();
            $message = $obj1->create_games($bet_type, $match_type,  $odds, $prediction);
            
          
        }
          catch(Exception $e) {
   
   echo '<script type="text/javascript">alert("'.$e->getMessage();'");</script>';
    return 'Message: ' .$e->getMessage();
}
     }
     
      public function create_normal_games($bet_type, $match_type, 
                     $odds, $prediction) 
     {

        try { 
            
             // Escape user inputs for security
           
            
            $obj1 = new mod_creategames();
            $message = $obj1->create_normal_games($bet_type, $match_type, $odds, $prediction);
            
          
        }
          catch(Exception $e) {
   
   echo '<script type="text/javascript">alert("'.$e->getMessage();'");</script>';
    return 'Message: ' .$e->getMessage();
}
     }
     
}
    
