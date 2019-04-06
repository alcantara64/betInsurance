<?php
include 'header.php';
?>
<!--main-container-part-->
<?php
include 'controllers/con_showhistory.php';
      ?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> </div>
    <h1>Your History</h1>
  </div>
  <!--<div class="container-fluid">-->
    <hr>
    <?php
    $user_id = $_SESSION["user_id"];
    
    $obj1 = new con_game_history();
    echo $obj1->showGameHistory($user_id);
    ?>
  </div>

<!--Footer-part-->



<?php
include 'footer.php';
?>