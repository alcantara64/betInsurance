<?php
include 'models/mod_showhistory.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class con_game_history{
    
      public function  showGameHistory($user_id)
    {        
    //put your code here     
        try {             

            $obj1 = new mod_game_history();
            
        $result = $obj1->showGameHistory($user_id);
        
            
                    if ($result->num_rows > 0)
                    { 
                      $message = '';
                        while ($row = $result->fetch_assoc())
                        { 
                             $message .= '
                                 

    
    <h4 style="text-align: center"> '.$row["date_uploaded"].'</h4>
  
<div class="container-fluid">
      <div class="row" class="">
      <div class="span10">
    <table class="container">
	<thead>
		<tr>
			<th><h1>Game Type</h1></th>
			<th><h1>Teams</h1></th>
			<th><h1>prediction</h1></th>
			<th><h1>odds</h1></th>
                        <th><h1>Status</h1></th>
                        
		</tr>
	</thead>
	<tbody >';
                              $prediction_id = $row['prediction_id'];        
                            
                             $date_uploaded = $row['date_uploaded'];
                             $conn= open_db_connection();
                              $sql4 = "SELECT * FROM predictions WHERE date = '".$date_uploaded."' ";
                         $result2 = $conn->query($sql4);
                         if ($result2->num_rows > 0) {
                             while ($row2 = $result2->fetch_assoc()){
                                  if ($row2["match_status"]=="u") {
                                     $row2["match_status"] = '';
                                     $background = "";
                                 }
                                 if ($row2["match_status"]=="w") {
                                     $row2["match_status"] = 'won';
                                     $background = "";
                                 }
                                 if ($row2["match_status"]=="l") {
                                     $row2["match_status"] = 'lost';
                                     $background = "red";
                                 }
                                
                             $message .=  '<tr style = "background-color:'.$background.'" class="white"><td>'.$row2["bet_type"].'</td><td>'.$row2["match_type"].'</td><td>'.$row2["prediction"].'</td><td>'.$row2["odds"].'</td><td>'.$row2["match_status"].'</td></tr>';
                         
                             }
                             }
                              $message .= "</tbody>
</table>
      </div></div></div> <br><br>"; 
                        }
                                                 
                                               
                          return $message;
                    }
                                        else {
                                               $message = "You do not have any game to display yet";
                                                 return $message;
                                            }



                   
          }
          catch(Exception $e) {
   
 $message = $e->getMessage();
   return $message;
}
}

}
    