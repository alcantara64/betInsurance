<?php
include 'header.php';
?>
<!--main-container-part-->
<?php
include 'controllers/con_view_games.php';
include 'controllers/con_claim_insurance.php';
      ?>

<div id="content">
    <a href=""></a>
  <div id="content-header">
    <div id="breadcrumb"> <a href="../index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> </div>
    <h1>Insured Banker Games</h1>
  </div>
  <!--<div class="container-fluid">-->
    <hr>
    <?php
    $obj1 = new con_view_games();
    echo $obj1->showselectedgames();
    
    $user_id = $_SESSION["email"];
    
    $obj1 = new con_claim_insurance();
     $obj1->check_claiminsurance($user_id);
    
    ?>
  </div>

<!--Footer-part-->



<?php
include 'footer.php';
?>