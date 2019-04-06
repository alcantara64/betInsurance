<?php
include 'models/mod_non_active_users.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class con_non_active_users{
    
      public function shownonactiveusers()
    {        
    //put your code here     
        try {             

           $obj1 = new mod_non_active_users();
           $result = $obj1->shownonactiveusers();
            
            
        
        
            $message = '';
                    if ($result->num_rows > 0)
                    { 
                        
                                            
             $message .= '<div class="widget-content nopadding">
                        
<table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>S/N</th>
                  <th>First_name</th>
                  <th>Last_name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Date Joined</th>
                </tr>
              </thead>
              <tbody>';
                       $count = 1;
                       
                        while ($row = $result->fetch_assoc())
                        {
                            
                         
                        $message.=""; 
                      
                           
                             $message .=  '<tr class=""><td> '.$count.' </td><td>'.$row["first_name"].' </td><td>'.$row["last_name"].' </td><td>'.$row["email"].'</td><td>'.$row["phone"].'</td><td >'.$row["date"].'</td></tr>';
                         
                             
                             
                              $count ++;
                        
                        
                             }
                           $message .= "</tbody>
                    </table>
      </div>";                                
                          return $message;
                    
                                       



                   
          } else {
                                               $message = "no record for now";
                                                 return $message;
                                            }
        }
          catch(Exception $e) {
   
 $message = $e->getMessage();
   return $message;
}
}
 
}
    

