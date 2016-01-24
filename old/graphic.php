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
		<script type="text/javascript" src="scripts/fredhq-roundabout-c1bcd37/jquery.roundabout.js"></script>
		<title>Dan Fulcher | Web Design Essex | Graphic Design</title>
		<style type="text/css">
		.roundabout-holder {
		  list-style: none;
		  padding: 0;
		  margin: 0;
		  height: 500px;
		  width: 500px;
		  margin:auto;
	   }
	   .roundabout-moveable-item {
		  height: 405px;
		  width: 488px;
		  cursor: pointer;
		  background-color: #ccc;
		  border: 1px solid #999;
		  overflow:hidden;
	   }
	   .roundabout-in-focus {
		  cursor: auto;
	   
		</style>
		<script>
		   $(document).ready(function() {
			  $('ul.roundabout').roundabout();
		   });
		</script>
	</head>	
	<body>
		<?php include('header.php'); ?>
		<div id="wrapper"><!--Start of Wrapper-->
			<div id="content"><!--Start of content-->
				<h1 class="title">Graphic Design...</h1>
				<div class="content-box">
					<ul class="roundabout">
					   <li><img src="slices/roundabout/amraplgo.png"></li>
					   <li><img src="slices/roundabout/aspirelogo.png"></li>
					   <li><img src="slices/roundabout/cpslogo.png"></li>
					   <li><img src="slices/roundabout/detattslogo.png"></li>
					   <li><img src="slices/roundabout/ealogo.png"></li>
					   <li><img src="slices/roundabout/fulchlogo.png"></li>
					   <li><img src="slices/roundabout/futurefashionlogo.png"></li>
					   <li><img src="slices/roundabout/sevenlogo.png"></li>
					</ul>
					<p><em>I find that graphic design allows a lot more creative freedom than web design. You aren't restricted to as many guidelines.</em></br></br>
					I think that's why I enjoy it. As long as the graphic is simple, versatile, timeless, scaleable and memorable, you can pretty much do whatever you want.</br>
					I often draw up several concepts and let the client decide on their favorite and give feedback and improvements. This way they are more likely to end up with a logo or graphic that they are happy with.</br></br>
					On this page you will find several logos I have designed for a range of clients. Take a look around, I hope you like what you see.
					</p>
				</div>
			</div><!--End of content-->
			<div id="push"></div>
		</div><!--End of Wrapper-->
		<?php include('footer.php'); ?>
	</body>
</html>