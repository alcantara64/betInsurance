<?php

include 'header.php';
include 'controllers/con_show_unsub.php';
?>


<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>Unsubcribed Users</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        
        
        
        
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Unsubcribed users</h5>
          </div>
          <?php
          $obj1 = new con_show_unsub();
          echo $result = $obj1->shownonsubcribe();
          
          ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include 'footer.php';
?>
