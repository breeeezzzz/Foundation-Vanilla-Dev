<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation | Welcome</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="style.css" />
	<script src="js/vendor/jquery.js"></script>
	<script src="js/foundation.min.js"></script>
	<script src="js/foundation/foundation.topbar.js"></script>
    <script src="js/vendor/modernizr.js"></script>
	<script src="js/vendor/smooth-scroll.js"></script>
	<!--<script src="js/vendor/jquery.viewport.js"></script>
	<script src="js/vendor/jquery.inview.js"></script>-->
	<style>
	#magellanNav {display:none;}
	.a {
    height: 300px;
    width: 300px;
    background-color: green;
}

	</style>
  </head>
  <body>

	<?php include_once('templates/top-bar.php'); ?>

	<section class="scroll-container" role="document">
		

	  
		
		
			<div id="#magellanNav" class="tabs vertical" data-magellan-expedition="fixed">
			  <dl class="sub-nav">
				<dd data-magellan-arrival="start"><a href="#start">Start</a></dd>
				<dd data-magellan-arrival="nav1"><a href="#nav1">Next Page</a></dd>
				<dd data-magellan-arrival="nav2"><a href="#nav2">Nav 2</a></dd>
				<dd data-magellan-arrival="nav3"><a href="#nav3">Nav 3</a></dd>
				<dd data-magellan-arrival="start"><a href="#start">Start</a></dd>
			  </dl>
			</div>	 
	  
		
			<article id="page1" class="page page1"  data-magellan-destination="start">			
			<a name="start"></a>	
				<div class="row">			
					<div class="large-10 columns push-2">		
						<div class="panel">
							
							<span>HEEEEEY</span>

						</div>	
					</div>	
				</div>						
			</article>
		
		

		
			<article id="page2" class="page page2" data-magellan-destination="nav1">
			<a name="nav1"></a>		
				<div class="row">			
					<div class="large-10 columns push-2">		
						<div class="panel">
							
							<span>HEEEEEY</span>
								
						</div>	
					</div>	
				</div>		
				
			</article>
		
		
			<article id="page3" class="page page3"  data-magellan-destination="nav2">
			<a name="nav2"></a>		
				<div class="row">			
					<div class="large-10 columns push-2">		
						<div class="panel">
							
							<span>HEEEEEY</span>
								
						</div>	
					</div>	
				</div>		
			</article>
			
			
			<article id="page4" class="page page4" data-magellan-fixed-position="nav3">
			<a name="nav3"></a>
				<div class="row">			
					<div class="large-10 columns push-2">		
						<div class="panel">
							
							<span>HEEEEEY</span>
								
						</div>	
					</div>	
				</div>		
			</article>

		
		<article id="page5" class="page page5">
			<footer id="footer-one">

			
			</footer>	
		</article>
		
		<article id="page6" class="page page6">
			<footer id="footer-two">

			
			</footer>	
		</article>
		
	</section>





<script>
  $(document).foundation();
</script> 
<script>
	$(document).foundation({
	"magellan-expedition": {
	  active_class: 'active', // specify the class used for active sections
	  threshold: 0, // how many pixels until the magellan bar sticks, 0 = auto
	  destination_threshold: 150, // pixels from the top of destination for it to be considered active
	  throttle_delay: 200, // calculation throttling to increase framerate
	  fixed_top: 150, // top distance in pixels assigend to the fixed element on scroll
	  offset_by_height: false // whether to offset the destination by the expedition height. Usually you want this to be true, unless your expedition is on the side.
	}
	});
</script> 

<script>
   $(window).scroll(function() {

    if ($(this).scrollTop()>0)
     {
        $('#magellanNav').show();
     }
    else
     {
      $('#magellanNav').hide();
     }
 });

</script> 

<script>
smoothScroll.init({
	selector: '[data-scroll]', // Selector for links (must be a valid CSS selector)
	selectorHeader: '[data-scroll-header]', // Selector for fixed headers (must be a valid CSS selector)
	speed: 300, // Integer. How fast to complete the scroll in milliseconds
	easing: 'swing', // Easing pattern to use
	updateURL: true, // Boolean. Whether or not to update the URL with the anchor hash on scroll
	offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
	callback: function ( toggle, anchor ) {} // Function to run after scrolling
});
</script>

  </body>
</html>
