<?php  
?>    
      <script src='js/jquery-2.2.3.min.js'></script>
      <!--//js working-->	
      <!--  light box js -->
      <script src="js/lightbox-plus-jquery.min.js"> </script> 
      <!-- //light box js-->   
      <!--responsiveslides banner-->
      <script src="js/responsiveslides.min.js"></script>
      <script>
         // You can also use "$(window).load(function() {"
         $(function () {
         	// Slideshow 4
         	$("#slider4").responsiveSlides({
         		auto: true,
         		pager:false,
         		nav:true ,
         		speed: 900,
         		namespace: "callbacks",
         		before: function () {
         			$('.events').append("<li>before event fired.</li>");
         		},
         		after: function () {
         			$('.events').append("<li>after event fired.</li>");
         		}
         	});
         
         });
      </script>
      <!--// responsiveslides banner-->		
      <!--navbar-->
      <script>
         (function($){
         	// Menu Functions
            
         	$(document).ready(function(){
         	$('#menuToggle').click(function(e){
         		var $parent = $(this).parent('.menu');
         	  $parent.toggleClass("open");
         	  var navState = $parent.hasClass('open') ? "hide" : "show";
         	  $(this).attr("title", navState + " navigation");
         			// Set the timeout to the animation length in the CSS.
         			setTimeout(function(){
         				console.log("timeout set");
         				$('#menuToggle > span').toggleClass("navClosed").toggleClass("navOpen");
         			}, 200);
         		e.preventDefault();
         	});
           });
         })(jQuery);
      </script>
      <!--About OnScroll-Number-Increase-JavaScript -->
      <script src="js/jquery.waypoints.min.js"></script>
      <script src="js/jquery.countup.js"></script>
      <script>
         $('.counter').countUp();
      </script>
      <!-- //OnScroll-Number-Increase-JavaScript -->
      <!-- start-smoth-scrolling -->
      <script src="js/move-top.js"></script>
      <script src="js/easing.js"></script>
      <script>
         jQuery(document).ready(function ($) {
         	$(".scroll").click(function (event) {
         		event.preventDefault();
         		$('html,body').animate({
         			scrollTop: $(this.hash).offset().top
         		}, 900);
         	});
         });
      </script>
      <!-- start-smoth-scrolling -->
      <!-- here stars scrolling icon -->
      <script>
         $(document).ready(function () {
         
         	var defaults = {
         		containerID: 'toTop', // fading element id
         		containerHoverID: 'toTopHover', // fading element hover id
         		scrollSpeed: 1200,
         		easingType: 'linear'
         	};
         
         
         	$().UItoTop({
         		easingType: 'easeOutQuart'
         	});
         
         });
      </script>
      <!-- //here ends scrolling icon -->
      <!--bootstrap working-->
      <script src="js/bootstrap.min.js"></script>
      <!-- //bootstrap working-->
   </body>
</html>
<?php

?>