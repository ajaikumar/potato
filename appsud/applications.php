<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/i/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title></title>
  <meta name="description" content="">
  <!-- Mobile viewport optimized: h5bp.com/viewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link href="css/bootstrap-responsive.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <!-- More ideas for your head here: h5bp.com/d/head-Tips -->
  
  <!-- For the sticky footer -->
	<!--[if !IE 7]><style type="text/css">#sf-wrapper {display:table;height:100%}</style><![endif]-->

  <!-- All JavaScript at the bottom, except this Modernizr build.
       Modernizr enables HTML5 elements & feature detects for optimal performance.
       Create your own custom Modernizr build: www.modernizr.com/download/ -->
  <script src="extras/h5bp/js/libs/modernizr-2.5.3.min.js"></script>
</head>
<body>
  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7]>
    <link href="css/bootstrap.ie6.css" rel="stylesheet">
  	<p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p>
  <![endif]-->
<div id="sf-wrapper"> 
  	<header>
    <div>
    <label id="desired-apps">Get Desired Mobile Apps</label>
	</div>
  		<div class="navbar navbar-static-top" id="header-container">
  			<div class="container">
  				<div id="tabs">
  					<ul class="nav">
  						<li><a href="#"><span class="boldness">Apps</span></a></li>
  						<li><a href="#"><span class="boldness">Developers</span></a></li>
  						<li><a href="#"><span class="boldness">About</span></a></li>
  						<li><a href="#"><span class="boldness">News</span></a></li>
  					</ul>
  				</div>
  			</div>
  		</div>
  	</header>
</div>
<div class="container">
         <div id="ratings" class="navbar span12">
		  <ul class="nav">
			 <li class="divider-vertical"><a href="#">Top Rated</a></li>
			 <li class="divider-vertical"><a href="#">Most Downloaded</a></li>
			 <li class="divider-vertical"><a href="#">Top New</a></li>
			 <li class="divider-vertical"><a href="#">Forum</a></li>
		  </ul>
	   </div>
       <div id="specpage">
            <h3>Applications</h3>
            <hr />
       </div>
	
    </div>  
	  <!-- JavaScript at the bottom for fast page loading -->
	
	  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
	 <!-- commented by ajai
	  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	  <script>window.jQuery || document.write('<script src="extras/h5bp/js/libs/jquery-1.7.1.min.js"><\/script>')</script> -->
	  <!-- scripts concatenated and minified via ant build script-->
	  <script src="extras/prettify/prettify.js"></script>
	  <script src="js/bootstrap.min.js"></script>
	  
	  <!-- end scripts-->
	  
	  <!-- If you'd rather pick and choose, comment the above and uncomment what you need below -->
	  <!--script type="text/javascript" src="js/bootstrap-alert.min.js"></script-->
	  <!--script type="text/javascript" src="js/bootstrap-button.min.js"></script-->
	  <!--script type="text/javascript" src="js/bootstrap-carousel.min.js"></script-->
	  <!--script type="text/javascript" src="js/bootstrap-collapse.min.js"></script-->
	  <!--script type="text/javascript" src="js/bootstrap-dropdown.min.js"></script-->
	  <!--script type="text/javascript" src="js/bootstrap-modal.min.js"></script-->
	  <!--script type="text/javascript" src="js/bootstrap-modal.min.js"></script-->
	  <!--script type="text/javascript" src="js/bootstrap-modal.min.js"></script-->
	  <!--script type="text/javascript" src="js/bootstrap-popover.min.js"></script-->
	  <!--script type="text/javascript" src="js/bootstrap-scrollspy.min.js"></script-->
	  <!--script type="text/javascript" src="js/bootstrap-tab.min.js"></script-->
	  <!--script type="text/javascript" src="js/bootstrap-tooltip.min.js"></script-->
	  <!--script type="text/javascript" src="js/bootstrap-transition.min.js"></script-->
	  <!--script type="text/javascript" src="js/bootstrap-typeahead.min.js"></script-->
	  <!--script type="text/javascript" src=""></script-->
	  
	  <!-- end scripts -->
	
	  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
	       mathiasbynens.be/notes/async-analytics-snippet -->
           
           <div class="container">
                    <div id="leftPanel"></div>
                    
                   <img src="img/vr_line.png" id="vertical-line" />

           
                    <div id="rightnav">
                           <ul class="nav">
			                <li class="divider-vertical"><a href="#">Applications</a></li>
                            <li class="divider-vertical"><a href="#">Games</a></li>
                            <li class="divider-vertical"><a href="#">Utilities</a></li>
		                    <li class="divider-vertical"><a href="#">Latest</a></li>
                            <li class="divider-vertical"><a href="#">Most Downloaded</a></li>
                            <li class="divider-vertical"><a href="#">Most Rated</a></li>
                           </ul>
                    </div>
           </div>
           
           

  <footer id="footer">
  <hr />
 
       
        <div id="footnav">
            <ul>
            <li><a href="#">Mobile</a></li>
            <li><a href="#">People</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Developers</a></li>
            <li><a href="#">Forum</a></li>
            <li><a href="#">Policy</a></li>
            <li><a href="#">Terms</a></li>
            <li><a href="#">Help</a></li>
            
            </ul>        
        </div>

  </footer>
</div>
  <!-- A little ie7- magic -->
  <!--commented by ajai<script type="text/javascript"> $(function(){if($.browser.msie&&parseInt($.browser.version,10)===6){$('.row div[class^="span"]:last-child').addClass("last-child");$('[class="span"]').addClass("margin-left-20");$(':button[class="btn"], :reset[class="btn"], :submit[class="btn"], input[type="button"]').addClass("button-reset");$(":checkbox").addClass("input-checkbox");$('[class^="icon-"], [class=" icon-"]').addClass("icon-sprite");$(".pagination li:first-child a").addClass("pagination-first-child")}}) </script>-->
</body>
</html>