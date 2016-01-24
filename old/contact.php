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
		<title>Dan Fulcher | Web Design Essex | Contact Me</title>
		<script type="text/javascript">
			function changeColor(field) {
				field.value='';
				field.style.color='#000000';
			}
		</script>
		<?php
			$clear = "";
			$e = 0;
			$email = "";
			$er1 = "";
			$er2 = "";
			$er3 = "";
			$erstyle1 = "";
			$erstyle2 = "";
			$erstyle3 = "";
			$message = "";
			$name = "";
			$pass = "";
		
			if ($_POST) {
				$name = $_POST['name'];
				$email = $_POST['email'];
				$message = $_POST['message'];
				$header = "From: services@DanFulch.com\r\n";
				$email_message = "Name: {$name} \r\nEmail: {$email} \r\nMessage: {$message}";
				
				if($name == "") {
					$er1 = "Please enter your name.";
					$erstyle1 = 'style="color:red;"';
					$clear = 'onClick="changeColor(this)"';
					$e++;
				}
				if($name == "Please enter your name.") {
					$erstyle1 = 'style="color:red;"';
					$clear = 'onClick="changeColor(this)"';
					$e++;
				}
				if($email == "") {
					$er2 = "Please enter your email address.";
					$erstyle2 = 'style="color:red;"';
					$clear = 'onClick="changeColor(this)"';
					$e++;
				} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$email = "";
					$er2 = "Email is invalid.";
					$erstyle2 = 'style="color:red;"';
					$clear = 'onClick="changeColor(this)"';
					$e++;
				}
				if($message == "") {
					$er3 = "Please enter your message.";
					$erstyle3 = 'style="color:red;"';
					$clear = 'onClick="changeColor(this)"';
					$e++;
				}
				if($message == "Please enter your message.") {
					$erstyle3 = 'style="color:red;"';
					$clear = 'onClick="changeColor(this)"';
					$e++;
				}
				if($e == 0) {
					$name = "";
					$email = "";
					$message = "";
					$pass = "<p style=\"color:red; float:left; font-weight:bold; \">Thank you. Your message has been sent.</p>";
					mail('daniel.fulcher@btinternet.com', "Customer Query", $email_message, $header);
				}
			}
		?>
	</head>	
	<body>
		<?php include('header.php'); ?>
		<div id="wrapper"><!--Start of Wrapper-->
			<div id="content"><!--Start of content-->
				<h1 class="title">Contact Me...</h1>
				<div class="content-box">
					<p class="cont-box-text"> <em>Has anything on this website interested you?</em></br></br>
					Feel free to get in touch...</br></br>
					<em>Mobile:</em>07592 755469</br></br>
					<em>Email:</em>daniel.fulcher@btinternet.com</br></br>
					<em>Also, like me on <a href="https://www.facebook.com/DanFulcherWebDesign" alt="">Facebook</a></br></br>
					And follow me on <a href="https://twitter.com/DanFulchDesign" alt="">Twitter</a></em></p>
					<div class="clear"></div>
					<div id="contact_form">
						<form method="post">
							<div class="form_labels">Name:</div><input class="form_input" maxlength="30" name="name" <?php echo $erstyle1; echo $clear;?> type="text" value="<?php echo $name; echo $er1;?>" />
							<div class="clear"></div>
							<div class="form_labels">Email:</div><input class="form_input" maxlength="50" name="email" <?php echo $erstyle2;  echo $clear;?> type="text" value="<?php echo $email; echo $er2;?>" />
							<div class="clear"></div>
							<div class="form_labels">Message:</div><textarea maxlength="600" name="message" <?php echo $erstyle3;  echo $clear;?>><?php echo $message; echo $er3;?></textarea>
							<div class="clear"></div>
							<input id="form_submit" type="submit" value="Submit" />
							<div class="clear"></div>
							<?php echo $pass; ?>
						</form>
					</div>
					<img alt="Polaroid stack, Dan Fulcher, London." id="contact_img" src="images/stack-polaroids.png" />
					<div class="clear"></div>					
				</div>
			</div><!--End of content-->
			<div id="push"></div>
		</div><!--End of Wrapper-->
		<?php include('footer.php'); ?>
	</body>
</html>