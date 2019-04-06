<?php
include 'header.php';
 include 'includes/sendemail.php';
  if (isset($_POST['full_name'])&&isset($_POST['email'])&&isset($_POST['message'])) {
    $fullname = $_POST['full_name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
       $email_password = "tukoolbetinsurance2017!"; 
        $sender = $email;
        $user_name = 'info@tukoolbetinsurance.com';
        $recepient = 'tukoollimited@gmail.com';
        $mysubject = "Message from ".$fullname."";
        $mymessage = $message;     
        sendEmail($sender, $recepient, $mysubject, $mymessage, $email_password,$user_name);
        echo "<script type='text/javascript'>alert('Thanks for contacting us'); </script>";
        
    
} 

?>


<marquee behavior="scroll" style="color: red" loop="-1" width="100%">PLEASE READ THE FAQ AND TERMS & CONDITION BEFORE USING THE WEBSITE!!!</marquee>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
      
<!--    <div class="item active">
        <img src="images/slider/bg2.jpg" alt="tukoollimited">
      <div class="carousel-caption">
        
      </div>
    </div>-->

    <div class="item active">
        <img src="images/slider/bg4.jpg" alt="tukoollimited">
      <div class="carousel-caption">
       
      </div>
    </div>

    <div class="item">
        <img src="images/slider/chatt.jpg" alt="tukoollimited">
      <div class="carousel-caption">
        
      </div>
    </div>

    <div class="item">
        <img src="images/slider/bg1.jpg" alt="tukoollimited">
      <div class="carousel-caption">
       
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br><br><br>
    <section id="hero-text" class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-sm-offset-2 col-xs-8 col-xs-offset-2" style="text-align:center">
                    <h3>NEVER BET ALONE BECAUSE FOOTBALL BETTING IS A RISKY VENTURE</h3>
                    <ul style="list-style-image: url('images/iconmonstr-circle-2-12.png');">
                        <li> <p style=" text-align: justify; color: black; font-size: 16px">With Tukool Limited as your bet insurance partner, the risk is reduced to zero
                    </p></li>
                       
                    <li><p style=" text-align: justify; color: black; font-size: 16px">
                            Bet on our banker games weekly.</p></li> <li><p style=" text-align: justify; color: black; font-size: 16px">Pay 10% of your betting capital as insurance fee monthly.</p></li>
                    <li><p style=" text-align: justify; color: black; font-size: 16px"> Make roughly 60% profit monthly.</p></li>
                       <li> <p style=" text-align: justify; color: black; font-size: 16px">Tukool Limited will pay your full betting capital back if anything goes wrong.</li>
                    </ul>
                       <h2 style=" text-align: center">
                        What else!!!
                    </h2>
                </div>
                
            </div>
            <div class="row">
            <div class="col-sm-12   text-center">
                <a class="btn btn-primary btn-lg animated col-xs-12" style="border-radius: 15px"  href="registration.php" ><h5 id="blink" style="color: red">REGISTER</h5></a>
                </div>
            </div>
            <div class="row">
            <div class="col-sm-12 col-xs-12">
                <a class="btn btn-primary btn-lg animated col-xs-12" style="border-radius: 15px"  href="login.php" ><h5 id="blink" style="color: red">SIGN IN</h5></a>
                </div>
            </div>
        </div>
    </section><!--/#hero-text-->

     

 <section id="about">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">FAQ</h2>
                <p class="text-center wow fadeInDown"> Read some of our <br> Frequently Asked Questions.</p>
            </div>

            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                    <img class="img-responsive" src="images/about.jpg" alt="">
                </div>

                <div class="col-sm-6 wow fadeInRight">
                    <ol>
                        <li><h4 class="column-title"> Q. What services does Tukool Limited offer?</h4>
                            <ol style=" list-style-type: none;"> <li> 
                    <p>A. Tukool Limited offers football bet insurance services. </p>

                  
</li></ol></li>
<li><h4 class="column-title"> Q. How do I register? </h4>
    <ol style=" list-style-type: none;"> <li> 
                    <p>A. Users can register by filling the registration form online and paying an insurance fee ( 10% of betting capital ) </p>

                  
</li></ol></li>
<li><h4 class="column-title"> Q. How do I use the service?</h4>
                            <ol style=" list-style-type: none;"> <li> 
                    <p>Once you login into the website, you can click on the banker game to see the list of games to bet on by Friday every week. </p>

                  
</li></ol></li>
                    
</ol>
                    <br>
                    
                </div>
                
            </div>
            <div class="row">
                <div class="col-sm-12 text-center" >
                    <a class="btn btn-primary " href="faq.php">Read More</a>
                </div>
            </div>
        </div>
    </section><!--/#about-->


  



   
   

    
    <section id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">

                    <div id="carousel-testimonial" class="carousel slide text-center" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <p><img class="img-thumbnail" src="images/pic1.jpg" alt=""></p>
                                <h4>Shola Ekundayo</h4> 
                                <p>Since I started using Tukool, I dont fear lossing a bet because my betting capital is insured... thanks to tukool.</p>
                            </div>
                            <div class="item">
                                <p><img class="img-thumbnail" src="images/pic2.jpg" alt=""></p>
                                <h4>Chime Okafor</h4> 
                                <p>With Tukool limited, betting becomes easy..</p>
                            </div>
                        </div>

                        <!-- Controls -->
                        <div class="btns">
                            <a class="btn btn-primary btn-sm" href="#carousel-testimonial" role="button" data-slide="prev">
                                <span class="fa fa-angle-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="btn btn-primary btn-sm" href="#carousel-testimonial" role="button" data-slide="next">
                                <span class="fa fa-angle-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#testimonial-->

    
    <section id="contact-us">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Contact Us</h2>
                <h3 class="text-center wow fadeInDown">You have something for us?</h3>
                
            </div>
        </div>
    </section><!--/#contact-us-->


    <section id="contact">
        
        <div class="container-wrapper">
            <div class="container contact-info">
                <div class="row">
				  <div class="col-sm-4 col-md-4">
                        <div class="contact-form">
                            <address class="col-sm-10">
                              <strong>Tukool Limited.</strong><br>
                              WORKBAY BUILDING<br>
                              3-9 Olu Koleosho Street, Off Medical<br>
                              Road, Ikeja-Lagos, Nigeria<br>
                              <img src="images/iconmonstr-whatsapp-1-16.png" alt=""/> (+234) 9029274468 <br>
                               <img src="images/iconmonstr-phone-1-16.png" alt=""/>(+234) 08154261386 <br>
                             Email: info@tukoolbetinsurance.com
                            </address>
                            
							
							<article class="hours-block col-sm-10">

							<div><strong>Walk-in Hours</strong></div><br/>			
							<div class="pull-left">
							<p><b>Monday &amp; Tuesday</b></p>
							<p><b>Wednesday</b></p>
							<p><b>Thursday</b></p>
							<p><b>Friday</b></p>
							 
							</div>

							<div class="pull-right">
							<p>10am-4pm</p>
							<p>9am-4pm</p>
							<p>9am-4pm</p>
							<p>8am-4pm</p>
								
							</div>

							</article>

					</div></div>
                    <div class="col-sm-8 col-md-8">                      
						<div class="contact-form">											
						  
		<!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->
                <form name="sentMessage" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" id="contactForm"  novalidate>
		<div class="control-group">
		<div class="controls">
		<input type="text" name="full_name" class="form-control" 
		placeholder="Full Name" id="name" required
		data-validation-required-message="Please enter your name" />
		<p class="help-block"></p>
		</div>
		</div> 	
		<div class="control-group">
		<div class="controls">
                    <input type="email" name="email" class="form-control" placeholder="Email" 
		id="email" required
		data-validation-required-message="Please enter your email" />
		</div>
		</div> 	

		<div class="control-group">
		<div class="controls">
		<textarea name ="message" rows="10" cols="100" class="form-control" 
		placeholder="Message" id="message" required
		data-validation-required-message="Please enter your message" minlength="5" 
		data-validation-minlength-message="Min 5 characters" 
		maxlength="999" style="resize:none"></textarea>
		</div>
		</div> 		 
		<div id="success"> </div> <!-- For success/fail messages -->
		<button type="submit" class="btn btn-primary pull-right">Send</button><br />
		</form>

							 					
						</div>
                    </div>
                </div>
            </div>
        </div>

   </section><!--/#bottom-->
   <?php 
   include 'footer.php';
   ?>