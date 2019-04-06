<?php
include 'header.php';
include 'controllers/con_show_games_unknown.php';
include 'controllers/con_update_games.php';
include 'controllers/con_total_users.php';
 if (isset($_POST['prediction_id'])&& isset($_POST['status'])) {
     
     $obj1 = new con_update_games();
     $result = $obj1->updategames($prediction_id, $status);
     
}
?>
<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
    
<!--End-Action boxes-->    

<!--Chart-box-->    
    <div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
          <h5>Site Analytics</h5>
        </div>
        <div class="widget-content" >
          <div class="row-fluid">
            <div class="span9">
            
             <?php echo $_SESSION["email"];?>
            </div>
            <div class="span3">
              <ul class="site-stats">
                <li class="bg_lh"><i class="icon-user"></i> <strong><?php 
                $obj1 = new con_checktotalactive_users();
                echo $obj1->showtotalsactiveusers();
                ?></strong> <small>Total Users</small></li>
                <li class="bg_lh"><i class="icon-plus"></i> <strong><?php 
                $obj1 = new con_checktotalactive_users();
                echo $obj1->totalnewuser();
                ?></strong> <small>New Users </small></li>
                <li class="bg_lh"><i class="icon-money"></i> <strong><?php 
                $obj1 = new con_checktotalactive_users();
                echo $obj1->totalamount();
                ?></strong> <small>Total Amount</small></li>
                <li class="bg_lh"><i class="icon-money"></i> <strong><?php 
                $obj1 = new con_checktotalactive_users();
                echo $obj1->highestinsurance();
                ?></strong> <small>Higest insurance</small></li>
                <li class="bg_lh"><i class="icon-repeat"></i> <strong>10</strong> <small>Pending Orders</small></li>
                <li class="bg_lh"><i class="icon-globe"></i> <strong>8540</strong> <small>Online Orders</small></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
<!--End-Chart-box--> 
    <hr/>
  
  </div>
</div>

<!--end-main-container-part-->

<?php
include 'footer.php';
?>