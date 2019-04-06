<?php
include 'models/mod_show_unsub.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class con_show_unsub{
    
      public function shownonsubcribe()
    {        
    //put your code here     
        try {             

           $obj1 = new mod_show_unsub();
           $result = $obj1->shownonsubcribe();
            
            $obj = new mod_show_unsub();
        $rows = $obj->paging();
        $page_rows = 10;
        $last = ceil($rows/$page_rows);
        if ($last<1) {
            $last = 1;
        }
        $pagenum = 1;
        if (isset($_GET['pn'])) {
            $pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
        }
        if ($pagenum <1) {
            $pagenum = 1;
        }elseif ($pagenum > $last) {
                $pagenum = $last;
            }
            $limit = 'Limit'.($pagenum -1)*$page_rows.','.$page_rows;
            $text_line1 = "unsubcribe (<b>$rows</b>)";
            $text_line2 = "page <b>$pagenum</b> of <b>$last</b>";
            $paginationctrs = '';
            if ($last !=1) {
                
                if ($pagenum >1) {
                    $previous = $pagenum -1;
                    $paginationctrs .='<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'">previous</a> &nbsp; &nbsp;';
                    for ($i=$pagenum-4; $i = $pagenum; $i++){
                        if ($i > 0) {
                             $paginationctrs .='<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">".$i."</a> &nbsp;';
                            
                        }
                  
                        
                    }
                    $paginationctrs .= ''.$pagenum.'&nbsp';
                    for ($i = $pagenum+1; $i<=$last; $i++){
                        $paginationctrs .=  $paginationctrs .='<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'/a> &nbsp;';;
             if ($i >= $pagenum+4) {
                 break;
                  }
                    }
                    if ($pagenum != $last) {
                        $next = $pagenum + 1;
                        $paginationctrs = '&nbsp; &nbsp; <a href="'.$_SERVER["PHP_SELF"].'?pn="'.$next.'">Next</a>';
                    }
                }
            }
        
        
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
    


