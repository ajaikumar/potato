<?php
ob_start();
session_start();
include('model/allclasses.php');
$obj=new connection();
//$obj->connect;
?>
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
  <link href="css/bootstrap-responsive.css" rel="stylesheet">
  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
  <link rel="stylesheet" href="css/bootstrap.css">
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
      <img src="img/Logo_appsud.png" id="appsud-img">
    <div>
    <label id="desired-apps">Get Desired Mobile Apps</label>
	</div>
  		<div class="navbar navbar-static-top" id="header-container">
  			<div class="container" id="UI-tabs">
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
    <div id="ratings" class="navbar span12 offset1">
      <ul class="nav">
      <li class="divider-vertical"><a href="#">Top Rated</a></li>
      <li class="divider-vertical"><a href="#">Most Downloaded</a></li>
      <li class="divider-vertical"><a href="#">Top New</a></li>
      <li class="divider-vertical"><a href="#">Forum</a></li>
      </ul>
    </div>
  </div>
