<?php
include 'header.php';
include 'controllers/con_show_games_unknown.php';
include 'controllers/con_update_games.php';

 if (isset($_POST['prediction_id'])&& isset($_POST['match_status'])) {
     $prediction_id =$_POST['prediction_id'];
     $status = $_POST['match_status'];
     $obj1 = new con_update_games();
     $result = $obj1->updatenormalgames($prediction_id, $status);
     
}
 ?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> </div>
    <h1>Selected Games</h1>
  </div>
  <!--<div class="container-fluid">-->
    <hr>
  
    <?php
     
            
             $obj2 = new con_unknown_status();
             echo  $obj2->showselectednormalgames();
             
    ?>
         
  </div>

<!--Footer-part-->



<?php
include 'footer.php';
?>