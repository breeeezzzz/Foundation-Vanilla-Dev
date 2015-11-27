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
  </head>
  <body>

	<?php include_once('templates/top-bar.php'); ?>

	<section class="scroll-container" role="document">
		
		<article id="page1" class="page page1">
			<div class="pane">
			<div class="row">
				<div class="large-12 columns">
					
						<a data-scroll id="start-button" class="button" href="#page2">Start</a>
						
					</div>
				</div>	
			</div>				
		</article>

		

		<article id="page2" class="page page2">
			<div class="pane">
			<div class="row">
				<div class="large-12 columns">
					
						<a data-scroll role="button" class="success button" href="#page3">Next</a>
						
					</div>	
				</div>	
			</div>
		</article>
		
		<article id="page3" class="page page3">
			<div class="pane">
			<div class="row">
				<div class="large-12 columns">
					
						<a data-scroll role="button" class="success button" href="#page4">Next</a>
					
					</div>	
				</div>	
			</div>
		</article>
		
		<article id="page4" class="page page4">
		<div class="pane">
			<div class="row">
				<div class="large-12 columns">
					
						<a data-scroll role="button" class="success button" href="#page1">Top</a>
					
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
smoothScroll.init({
	selector: '[data-scroll]', // Selector for links (must be a valid CSS selector)
	selectorHeader: '[data-scroll-header]', // Selector for fixed headers (must be a valid CSS selector)
	speed: 1000, // Integer. How fast to complete the scroll in milliseconds
	easing: 'swing', // Easing pattern to use
	updateURL: true, // Boolean. Whether or not to update the URL with the anchor hash on scroll
	offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
	callback: function ( toggle, anchor ) {} // Function to run after scrolling
});
</script>

  </body>
</html>
