<?php
include 'header.php';
?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>Tables</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Week 1</h5>
          </div>
          <div class="widget-content nopadding">
            <div class="row" id="dynamic_field">
         <div class="form-horizontal" >
             <div class="col-sm-4">
           
                <div class="form-group-sm">       
      <label for="focusedInput">Item </label>
      <input type="text" class="form-control" name="item[]" id="item" value="" placeholder="item name">
                     </div>
           </div>  
         
    
     <div class="col-sm-offset-1 col-sm-1">         
           
                <div class="group-sm">       
      <label for="focusedInput">quantiy</label>
      <input type="number" class="form-control" id="quantity" name="quantity[]" placeholder="quantity" value="">
                     </div>
           </div> 
    
      <div class="col-sm-offset-1 col-sm-1">         
           
                <div class="form-group-sm">       
      <label for="focusedInput">Rate(NGN)</label>
      <input type="number" class="form-control" name="rate[]" id="rate" ng-model="rate" onblur="amount_rate()">
                  
                        </div>
           </div> 
      
       <div class="col-sm-offset-1 col-sm-2">         
           
                <div class="form-group-sm">       
      <label for="focusedInput">Amount</label>
      <input type="number" class="form-control" id="amount"  name="amount[]" > 
                    
                </div>
           </div> 
             
         </div> 
         
         <button id="add" class="btn-success btn-sm">+</button> </div>
          </div>
        </div>
          
          <?php
include 'footer.php';
?>

