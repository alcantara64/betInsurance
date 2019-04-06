<?php
include 'header.php';
?>
<!--main-container-part-->
<?php
include 'controllers/con_view_games.php';

      ?>

<div id="content">
    <a href=""></a>
  <div id="content-header">
    <div id="breadcrumb"> <a href="../index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> </div>
    <h1>Daily Games</h1>
  </div>
  <!--<div class="container-fluid">-->
    <hr>
    <?php
    $obj1 = new con_view_games();
    echo $obj1->showselectedgames();
    
    
    
    
    
    ?>
  </div>

<!--Footer-part-->



<?php
include 'footer.php';
?>