<?php
  if (isset($_POST['register'])) {
    $studentNo = $_POST['sid'];
    $lastName = $_POST['ln'];
    $firstName = $_POST['fn'];
    $emailAddress = $_POST['email'];
    $password = $_POST['pwd'];
    $birthDate = $_POST['bday'];
  } 
  else {
    header('location: register.php');

  }
?>
<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Welcome!</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/media-queries.css">         

   <!-- Script
   =================================================== -->
	<script src="js/modernizr.js"></script>

   <!-- Favicons
	=================================================== -->
	<link rel="shortcut icon" href="favicon.png" >

</head>

<body class="homepage">

   <div id="preloader"> 
	   <div id="status">
         <img src="images/loader.gif" height="60" width="60" alt="">
         <div class="loader">Loading...</div>
      </div>
   </div>
   

   <!-- Header
   =================================================== -->
   <header id="main-header">

   	<div class="row header-inner">
	      <div class="logo">
	         <a class="smoothscroll" href="#hero">Home.</a>
	      </div>
	   </div> <!-- /header-inner -->

   </header> 


   <!-- Hero
   =================================================== -->
   <section id="hero">	
   	  
		<div class="row hero-content">

			<div class="twelve columns flex-container">

			   <div id="hero-slider" class="flexslider">

				   <ul class="slides">

					   <!-- Slide -->
					   <li>
						   <div class="flex-caption">
								<h1>Hello, <?=$firstName?> <?=$lastName?>!</h1>															   
							</div>						
					   </li>

					   <!-- Slide -->
					   <li>						
							<div class="flex-caption">
								<h1 >
                Your student number is: <?=$studentNo?><br/>
                Your email address is: <?=$emailAddress?><br/>
                Your birthday is: <?=$birthDate?><br/>
                Your password is: <?=$password?><br/>
                </h1>									   
							</div>					
					   </li>

					   <!-- Slide -->
					   <li>
						   <div class="flex-caption">
								<h1 >The date and time today is <?=date('c')?></h1>									   
							</div>
					   </li>					              

				   </ul>

			   </div> <!-- .flexslider -->				   

	      </div> <!-- .flex-container -->      

		</div> <!-- .hero-content -->	   

   </section> <!-- #hero -->





   <!-- Footer
   ================================================== -->
   <footer>

      <div class="row">       

         <div class="six columns tab-whole footer-about">
				
				<h3>Nung Ako'y Bata pa Transcript</h3>
               
            <p>Nung ako'y bata pa.. nya yi ya yo .. Ipapasa ko to sa Facebook bwisit ka </p>
            <p>Ma si budak sinuntok ako sa likod</p>        
            <p>Nag aano lang ako dito pa-epal!</p>
            <p>Mamatay ka na, mamatay ka na</p>


         </div> <!-- /footer-about -->

         <div class="six columns tab-whole right-cols">

            <div class="row">

               <div class="columns">
                  <h3 class="address">Contact Me (For Girls Only)</h3>
                  <p>
                  09777956114
                  </p>

                  <ul>
                    <li><a href="mailto:someone@puremedia.com">shaunxavierisrael.pascual<br/>@benilde.edu.ph</a></li>
                  </ul>                  
               </div> <!-- /columns -->             

               <div class="columns last">
                  <h3 class="contact">Follow Me</h3>

                  <ul>
                     <li><a href="#">https://www.facebook.com/shaunpascual</a></li>
                     <li><a href="#">https://twitter.com/YooourXavier</a></li>
                  </ul>
                  
               </div> 

            </div> 

         </div>

         <p class="copyright">&copy; Copyright 2017. Design by <a href="http://www.styleshout.com/">Shaun Pascual.</a></p>        

         <div id="go-top">
            <a class="smoothscroll" title="Back to Top" href="#hero"><span>Top</span><i class="fa fa-long-arrow-up"></i></a>
         </div>

      </div> 

   </footer>


   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>   
   <script src="js/jquery.flexslider.js"></script>
   <script src="js/jquery.fittext.js"></script>
   <script src="js/backstretch.js"></script> 
   <script src="js/waypoints.js"></script>  
   <script src="js/main.js"></script>

</body>

</html>v