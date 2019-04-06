<?php
include 'models/mod_show_games_unkown.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class con_unknown_status{
    
      public function  showselectedgames()
    {        
    //put your code here     
        try {             

           $obj1 = new mod_unknown_status();
            
            
        $result = $obj1->showunknownGames();
        
            $message = '';
                    if ($result->num_rows > 0)
                    { 
                        
                                                $message .= '
                        
<div class="container-fluid">
      <div class="row" class="">
      <div class="span12">
      <div class="table-responsive">
    <table class="table">
	<thead>
		<tr>   
			<th><h5>Game Type</h5></th>
			<th><h5>Teams</h5></th>
			<th><h5>prediction</h5></th>
			
                        <th><h5>Status</h5></th>
                        <th><h5>Click on update</h5></th>
		</tr>
	</thead>
	<tbody >';
                       $count = 1;
                       
                        while ($row = $result->fetch_assoc())
                        {
                            
                         
                        $message.="<form action='update_games.php' method='post'>"; 
                      
                           
                             $message .=  '<tr class=""><td>'.$row["bet_type"].' <input type="hidden" name="prediction_id" value="'.$row['prediction_id'].'"></td><td>'.$row["match_type"].'</td><td>'.$row["prediction"].'</td><td ><select style="width:70%" name="match_status"><option value="l">Loss</option><option value="w">Win</option></select></td><td><input type="submit" value="update"></td></tr>';
                         
                             
                              $message .= "</form>";
                              $count ++;
                        
                        
                             }
                          $message .= "</tbody>
                    </table>
                    </div>
      </div></div></div>";                         
                          return $message;
                    
                                       



                   
          } else {
                                               $message = "No match to show contact admin";
                                                 return $message;
                                            }
        }
          catch(Exception $e) {
   
 $message = $e->getMessage();
   return $message;
}
}
 public function  showselectednormalgames()
    {        
    //put your code here     
        try {             

           $obj1 = new mod_unknown_status();
            
            
        $result = $obj1->showunknownnormalGames();
        
            $message = '';
                    if ($result->num_rows > 0)
                    { 
                        
                                                $message .= '
                        
<div class="container-fluid">
      <div class="row" class="">
      <div class="span12">
      <div class="table-responsive">
    <table class="table">
	<thead>
		<tr>   
			<th><h5>Game Type</h5></th>
			<th><h5>Teams</h5></th>
			<th><h5>prediction</h5></th>
			
                        <th><h5>Status</h5></th>
                        <th><h5>Click on update</h5></th>
		</tr>
	</thead>
	<tbody >';
                       $count = 1;
                       
                        while ($row = $result->fetch_assoc())
                        {
                            
                         
                        $message.="<form action='update_normal_games.php' method='post'>"; 
                      
                           
                             $message .=  '<tr class=""><td>'.$row["bet_type"].' <input type="hidden" name="prediction_id" value="'.$row['normal_games_id'].'"></td><td>'.$row["match_type"].'</td><td>'.$row["prediction"].'</td><td ><select style="width:70%" name="match_status"><option value="l">Loss</option><option value="w">Win</option></select></td><td><input type="submit" value="update"></td></tr>';
                         
                             
                              $message .= "</form>";
                              $count ++;
                        
                        
                             }
                          $message .= "</tbody>
                    </table>
                    </div>
      </div></div></div>";                         
                          return $message;
                    
                                       



                   
          } else {
                                               $message = "No match to show contact admin";
                                                 return $message;
                                            }
        }
          catch(Exception $e) {
   
 $message = $e->getMessage();
   return $message;
}
}
}
    

