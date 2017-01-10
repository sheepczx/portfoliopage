<?php
$errors=[];
$missing =[];
if (isset($_POST['sendmessage'])) {
	
	$expected=['name', 'company','email','phone','msg'];
	$required=['name','email','msg'];
	$to = 'GergoBirges <sheepczx@gmail.com>';
	$subject = 'Email from portfolio';
	$headers =[];
	$headers[] ='From:sheepczx@gmail.com';
	$headers[]= 'Cc;';
	$headers[] = 'Content-type: text/plain; charset=utf-8';
	$authorised= '-fbirges.gergogmail.com';
	require './includes/process.php';
	/*$host  = $_SERVER['HTTP_HOST'];
	$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
	$extra = 'index.php#contact';
	header("Location: http://$host$uri/$extra");*/
}
?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--<script src="jquery-3.1.1.min.js"></script>
		<script src="bootstrap.min.js"></script>-->
		<script src="portfolio.js"></script>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!--<link rel="stylesheet" href="bootstrap.min.css">-->
		<link rel="stylesheet" href="portfolio.css"/>
	</head>
	<body>
		<div id="wrapper">
			<header id="pageheader">
				<nav id="headerlinks">
					<ul>
						<li>
							<a href="#about">ABOUT</a>
						</li>
						<li>
							<a href="#portfolio">PORTFOLIO</a>
						</li>
						<li>	
							<a href="#contact">CONTACT</a>
						</li>	
					</ul>
				</nav>
				<nav id="socialmedia">
					<ul>
						<li>
							<a href="https://www.freecodecamp.com/sheepczx">Freecodecamp</a>
						</li>
						<li>
							<a href="https://github.com/sheepczx">Github</a>
						</li>
					</ul>
				</nav>
			</header>
			<div class="content" id="content">
				<div id="about"><p></p></div>  /*need to think about it*/
				<div class="firstpart">
					<div id="imgandname">
						<img class="pic" src="images/mainpic.jpg" width="500px" alt="picofme">
						<p>GergoBirges</p>
					</div>
					<div class="info">
						<h2>Studying in Birkbeck's Web Technologies Foundation degree, 2nd year.<br>
						Knowledge about:HTML5, CSS3, JavaScript, PHP, MySQL.<br>
						Looking for relevant experience in Web development</h2>
					</div>
				</div>
				<div class="portfolio1" id="portfolio">
					<h2>Portfolio<small> early work</small></h2>
						<h3> Study related exam projects </h3>
						<div class="subject">
						<h3>Web Authoring</h3>
						<ul>
							<li>
								<div class="portfolioitem">
									<div class="slides">
										<img class="pic2" src="images/infma1.png" alt="final marked assignment 1">
									</div>
									<div class="slides">
										<img class="pic2" src="images/infma2.png" alt="final marked assignment 2"> 
									</div>
									<div class="slides">
										<img class="pic2" src="images/infma3.png" alt="final marked assignment 3">
									</div>
									<p class="details">create a small business page</p>
								</div>
								
							</li>
							<li>
								<div class="portfolioitem">
									<div class="slides">
										<img class="pic2" src="images/watma.png" alt="webpage">
										<p class="details">create a webpage from storyboard</p>
									</div>
									<div class="slides">
										<img class="pic2" src="images/WATMA_Storyboard.jpg" alt="webpage">
										<p class="details">create a webpage from storyboard</p>
									</div>
								</div>
							</li>
							<li>
								<div class="portfolioitem">
									<img class="pic2" src="images/wafma1.png" alt="emblem">
									<p class="details">create a webpage from scratch using given material</p>
								</div>
							</li>
						</ul>
						</div>
						<div class="subject">
						<h3>Javascript</h3>
						<ul>
							<li>
								<div class="portfolioitem">
									<div class="slides">
										<img class="pic2" src="images/diabetestool.png" alt="diabetestool">
										<p class="details">create a tool calculating your risk of diabetes and a form validation using JS</p>
									</div>
									<div class="slides">
										<img class="pic2" src="images/contactform.png" alt="contactform">
										<p class="details">create a tool calculating your risk of diabetes and a form validation using JS</p>
									</div>
								</div>
							</li>
						</ul>
						</div>
						<div class="subject">
						<h3>PHP</h3>
						<ul>
						
							<li>
								<div class="portfolioitem">
									<img class="pic2" src="images/diabetestool.png" alt="emblem">
									<p class="details">create a tool calculating your risk of diabetes</p>
								</div>
							</li>	
						</ul>
				</div>
				<!--<div class="portfolio2">
					<h2>Portfolio<small> fresh works</small></h2>
					<ul>
						<li>
							<div class="portfolioitem">
							</div>
						</li>
						<li>
							<div class="portfolioitem">
							</div>
						</li>
						<li>
							<div class="portfolioitem">
							</div>
						</li>
					</ul>
				</div>-->
				
					<div id="contact" >
						<div class="form" role="form">
							<?php if ($_POST && ($suspect || isset($errors['mailfail']))) :?>
							<p class="warning">Sorry, Your mail couldn't be sent.</p>
							<?php elseif ($errors||$missing): ?>
							<p class="warning">Please fix the indicated item(s)</p>
							<?php endif;?>
							<form method="post">
								<fieldset>
									<legend>CONTACT ME</legend>
									<div class="form-group leftform">
										<label for="name">Name
										<?php if ($missing && in_array('name', $missing)) : ?>
										<span class="warning"> Please add your Name</span>
										<?php endif; ?>
										</label>
										<input type="text" name="name" id="name" 
										<?php if ($errors || $missing){
											echo'value="'.htmlentities($name).'"'; 
										}?>
										>
									</div>
									<div class="form-group rightform">
										<label for="company">Company
										<?php if ($missing && in_array('company', $missing)) : ?>
										<span class="warning"> Please add your Company</span>
										<?php endif; ?>
										</label>
										<input type="text" name="company" id="company"
										<?php if ($errors || $missing){
											echo'value="'.htmlentities($company).'"'; 
										}?>>
									</div>
									<div class="form-group leftform">
										<label for="email">E-mail:
										<?php if ($missing && in_array('email', $missing)) : ?>
										<span class="warning"> Please add your Email</span>
										<?php elseif (isset($errors['email'])) : ?>
											<span class="warning"> Invalid Email address</span>
										<?php endif; ?>
										</label>
										<input type="e-mail" name="email" id="email" 
										<?php if ($errors || $missing){
											echo'value="'.htmlentities($email).'"'; 
										}?>>
									</div>
									<div class="form-group rightform">
										<label for="phone">Phone no.:
										<?php if ($missing && in_array('phone', $missing)) : ?>
										<span class="warning"> Please add your Phone Number</span>
										<?php endif; ?>
										</label>
										<input type="text" name="phone" id="phone"
										<?php if ($errors || $missing){
											echo'value="'.htmlentities($phone).'"'; 
										}?>>
									</div>
									<div class="form-group">
										<label for="msg">Message:
										<?php if ($missing && in_array('msg', $missing)) : ?>
										<span class="warning"> Please add your Comment</span>
										<?php endif; ?>
										</label>
										<textarea name="msg" id="msg"  placeholder="write message here"><?php if ($errors || $missing){
											echo htmlentities($msg); 
										}?></textarea>
									</div>
									<div class="form-group">
										<input type="submit" name="sendmessage" value="send">
									</div>
								</fieldset>
							</form>
						</div>
						<div id="mydata">
							<p> If you want to get in touch with me feel free to write an email to birges.gergoATgmail.com or use the form. For my phone number send an email aswell. <br><br>Thanks</p>
							<pre>
								<?php
								 /*if($_POST && $mailSent) {
									 echo "message: \n\n";
									 echo htmlentities($message);
									 echo "headers: \n\n";
									 echo htmlentities($headers);
								 }*/
								?>
							</pre>
							<?php if(isset($mailSent)) {
									if ($mailSent) {?>
							<p> Thanks For your Mail</p>
							<?php ;}}	?>
						</div>
						
					</div>
					
				
			</div>
			<footer id="footer">
			<p> By GergoBirges &copy 2016</p>
			</footer>
		</div>
	</body>
</html>