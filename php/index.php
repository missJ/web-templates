<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>INDEX TEMPLATE</title>
	<meta name="description" content="home page">
	<meta name="author" content="MissJack">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/layout.css">
	<link rel="stylesheet" href="css/fonts.css">

	<!-- Scripts
  ================================================== -->

	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>

	<!-- Favicons
	================================================== -->
	<link rel="favicon" href="img/favicon.ico">

</head>
<body>
<?php include_once("analyticstracking.php") ?>

	<!-- Primary Page Layout
	================================================== -->

<div class="container">
	<header>
    	<div class="sixteen column">
        	<div class="logo left"></div>
			<h1 class="remove-bottom">my awesome page</h1>
			<h4>this is seriously the best page ever</h4>
            <hr>
		</div>
	</header>

   	<div class="sixteen column">
    	<nav class="horiz">
        	<ul>
            	<li>horizontal nav</li>
            	<li><a href="">link #1</a></li>
                <li><a href="">link #2</a></li>
                <li><a href="">link #3</a></li>
			</ul>
		</nav>
	</div>

    
<main>
<!--	<div class="one-third column">
       	<nav class="vert">
			<h3>Vertical Nav</h3>
            <hr>
	           	<ul>
                	<li><a href="">Link #1</a></li>
                  	<li><a href="">Link #2</a></li>
                   	<li><a href="">Link #3</a></li>
                   	<li>Questions? <a href="mailto:jack@missjack.com">Email MissJack</a></li>
				</ul>
		</nav>
	</div>
	<div class="two-thirds column">
	</div>
-->
	<div class="two-thirds column">
		<h2>super nifty content</h2>
		<p>have you ever seen such an amazing website? no. no, you have not.</p>
        <p>just ask this cat...</p>
        <blockquote>
        srlsy, this site is da BEST!
        </blockquote>
        <p>see?? there you have it</p>    	
	</div>
    
    <div align="center" class="one-third column">
    	<img class="scale cat" src="img/404kitteh.jpg" >
	</div>

</main>
	
    <footer>
		<?php include("footer.php"); ?>
	</footer>

</div><!-- container -->


<!-- End Document
================================================== -->
</body>
</html>