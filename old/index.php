<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="">
		<meta name="keywords" content="">
		<link rel="stylesheet" type="text/css" href="styles/style.css" />
		<link rel="icon" href="images/favicon.png" type="image/x-icon" />
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
		<script type="text/javascript" src="scripts/jquery-1.7.2.min.js"></script>
		<link rel="stylesheet" href="scripts/css/slidorion.css" />
		<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,200,700' rel='stylesheet' type='text/css'>
		<script src="scripts/js/jquery.min.js"></script>
		<script src="scripts/js/jquery.easing.js"></script>
		<script src="scripts/js/jquery.slidorion.min.js"></script>
		
		<script>
		$(function() {
			$('#slidorion').slidorion({
				first: 2,
				easing: 'easeInOutCubic',
				effect: 'random'
			});
		});
		</script>
		<title>Dan Fulcher | Web Design Essex | Home</title>
		<style type="text/css">
		</style>
	</head>	
	<body>
		<?php include('header.php'); ?>
		<div id="wrapper"><!--Start of Wrapper-->
			<div id="content"><!--Start of content-->
				<h1 class="title">Welcome to my portfolio...</h1>
				<div class="content-box">
					<div id="slidorion">
			
						<div id="slider">
							<div id="slide1" class="slide">
								<img src="slices/slidorian-images/bhamjump.jpg" width="488" height="400" />
							</div>
							<div id="slide2" class="slide">
								<img src="slices/slidorian-images/CPS-design.jpg" width="488" height="400" />
							</div>
							<div id="slide3" class="slide">
								<img src="slices/slidorian-images/CPS-logo.jpg" width="488" height="400" />
							</div>
						</div>
						
						<div id="accordion">
							<div class="link-header">A little bit about me...</div>
							<div class="link-content">
								<p><em>Hi, my name is Daniel Fulcher</em></br>
								I am a Web and Graphic designer from Chelmsford, Essex. I have been doing design work since 2011, when I started an apprenticeship with Progressive Marketing.</br>
								Outside of work I also do a sport called parkour, also known as free running. I am also a musician. I sing and play guitar. As well as playing bass guitar and keyboard.</p>
							</div>
							<div class="link-header">Web Design...</div>
							<div class="link-content">
								<p><em>I believe that, like every business, every website should be unique.</em></br>
								That is why I never make two designs the same. A website is a companies online presence and should accurately represent the business.</br>
								I have always enjoyed designing for the web. I like the idea of creating something that not only looks good, but is also easily navigatable and accessible.
								</p>
							</div>
							<div class="link-header">Graphic Design...</div>
							<div class="link-content">
								<p><em>I feel that graphic design allows a lot more creative freedom than web design.</em></br>
								I enjoy creating graphics, such as logos, because you are creating something simple that represents a company or a person. It has to sum them up, without being overly complex.</br>
								</p>
							</div>
						</div>
						
					</div>
				</div>
			</div><!--End of content-->
			<div id="push"></div>
		</div><!--End of Wrapper-->
		<?php include('footer.php'); ?>
	</body>
</html>