<?php
include 'models/mod_view_games.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class con_view_games{
    
      public function  showselectedgames()
    {        
    //put your code here     
        try {             

            $obj1 = new mod_view_games();
            
        $result = $obj1->showselectedgames();
        
            $message = '';
                    if ($result->num_rows > 0)
                    { 
                        
    
                        while ($row = $result->fetch_assoc())
                        {
                                                $message .= '
                <h4 style="text-align: center"> '.$row["date"].'</h4>            
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
                            $date = $row['date'];
                            $conn= open_db_connection();
                              $sql4 = "SELECT * FROM normal_games WHERE date = '".$date."' ";
                         $result2 = $conn->query($sql4);
                         if ($result2->num_rows > 0) {
                              $background = "";
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
                              
                                            $message .= "</tbody>
</table>
      </div></div></div>"; 
                        }
                        
                             }
                                   
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
 public function  showselectedgamesdate()
    {        
    //put your code here     
        try {             

            $obj1 = new mod_view_games();
            
        $result = $obj1->showselectedgamesdate();
        
            
                    if ($result->num_rows > 0)
                    { 
                        
            
                        while ($row = $result->fetch_assoc())
                        {
                              $message .= '';
                             
                        }
                         
                          return $message;
                    }
                                        else {
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
    

