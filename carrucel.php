<!DOCTYPE html>

<html lang="es">
<head>
  <!-- Required CSS -->
  <link type="text/css" href="css/fancymoves.css" media="screen" charset="utf-8" rel="stylesheet"  />


  <!-- Required script -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js" charset="utf-8"></script>
  <script type="text/javascript" src="js/slider.js" charset="utf-8"></script>

  <!-- Demo only -->
  <link type="text/css" href="demo/demo.css" media="screen" charset="utf-8" rel="stylesheet"  />
  <script type="text/javascript" src="demo/demo.js"></script>
  
  <!-- FancyBox scripts -->
  <script type="text/javascript" src="fancybox-1.3.4/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
  <script type="text/javascript" src="fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
  <link rel="stylesheet" type="text/css" href="fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
 	
    
    	<script type="text/javascript">
		$(document).ready(function() {
			/*
			*   Examples - images
			*/

			$("a.pop1").fancybox();

			$("a.pop2").fancybox({
				'overlayShow'	: false,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'elastic'
			});

			$("a.pop3").fancybox({
				'transitionIn'	: 'none',
				'transitionOut'	: 'none',
				'overlayColor'		: '#000',
				'overlayOpacity'	: 0.7	
			});

			$("a.pop4").fancybox({
				'opacity'		: true,
				'overlayShow'	: false,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'none'
			});

			$("a.pop5").fancybox();

			$("a#example6").fancybox({
				'titlePosition'		: 'outside',
				'overlayColor'		: '#000',
				'overlayOpacity'	: 0.9
			});

			$("a.pop6").fancybox({
				'titlePosition'	: 'inside'
			});

			$("a.pop7").fancybox({
				'titlePosition'	: 'over'
			});

		});
	</script>
    
    


</head>


<body>


<div id="wrapper">


	<!-- Slider -->
	<div id="slider-five">

  					<div>
						<img src="images/demo-images/img1.jpg" alt="" />
                   	  	
   		  						<p>one hundred<br />
                                	<a class="pop1" href="images/demo-images/1-2.jpg" rel="group1" title="example title text">More Views</a>
                                	<a class="pop1" href="images/demo-images/1-3.jpg" rel="group1" title="more text right here"></a>
                            	</p>
  					</div>
        
<div>
						<img src="images/demo-images/img2.jpg" alt="" />
                   	  	
                           		<p>math problem<br />
                                	<a class="pop2" href="images/demo-images/2-2.jpg" rel="group2" title="example title text">More Views</a>
                                	<a class="pop2" href="images/demo-images/2-3.jpg" rel="group2" title="more text right here"></a>
                            	</p>
  					</div>
        
  					<div>
						<img src="images/demo-images/img3.jpg" alt="" />
                   	  	
                           		<p>better than i deserve<br />
                                	<a class="pop3" href="images/demo-images/3-2.jpg" rel="group3" title="example title text">More Views</a>
                                	<a class="pop3" href="images/demo-images/3-3.jpg" rel="group3" title="more text right here"></a>
                            	</p>
  					</div>
        
  					<div>
						<img src="images/demo-images/img4.jpg" alt="" />
                   	  	
                           		<p>seven days a week<br />
                                	<a class="pop4" href="images/demo-images/4-2.jpg" rel="group4" title="example title text">More Views</a>
                                	<a class="pop4" href="images/demo-images/4-3.jpg" rel="group4" title="more text right here"></a>
                            	</p>
  					</div>
        
  					<div>
						<img src="images/demo-images/img5.jpg" alt="" />
                   	  	
                           		<p>path to nowhere<br />
                                	<a class="pop5" href="images/demo-images/5-2.jpg" rel="group5" title="example title text">More Views</a>
                                	<a class="pop5" href="images/demo-images/5-3.jpg" rel="group5" title="more text right here"></a>
                            	</p>
  					</div>
        
  					<div>
						<img src="images/demo-images/img6.jpg" alt="" />
                   	  	
                           		<p>and then i woke up<br />
                                	<a class="pop6" href="images/demo-images/6-2.jpg" rel="group6" title="example title text">More Views</a>
                                	<a class="pop6" href="images/demo-images/6-3.jpg" rel="group6" title="more text right here"></a>
                            	</p>
  					</div>
        
  					<div>
						<img src="images/demo-images/img7.jpg" alt="" />
                   	  	
                           		<p>it's about time<br />
                                	<a class="pop7" href="images/demo-images/7-2.jpg" rel="group7" title="example title text">More Views</a>
                                	<a class="pop7" href="images/demo-images/7-3.jpg" rel="group7" title="more text right here"></a>
                            	</p>
  					</div>
        
  					<div>
						<img src="images/demo-images/img8.jpg" alt="" />
                   	  	
                           		<p>two are better than one<br />
                                	<a class="pop2" href="images/demo-images/8-2.jpg" rel="group8" title="example title text">More Views</a>
                                	<a class="pop2" href="images/demo-images/8-3.jpg" rel="group8" title="more text right here"></a>
                            	</p>
  					</div>
        
  					<div>
						<img src="images/demo-images/img9.jpg" alt="" />
                   	  	
                           		<p>lowercase<br />
                                	<a class="pop2" href="images/demo-images/9-2.jpg" rel="group9" title="example title text">More Views</a>
                                	<a class="pop2" href="images/demo-images/9-3.jpg" rel="group9" title="more text right here"></a>
                            	</p>
  					</div>
	</div>

    
    
    


</div>


</body>
</html>
