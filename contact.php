<?php
echo '<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact KuchBHI Sid</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/files/contact.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="/files/main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="/files/contact.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img id="logo" src="/graphics/Logo-Transpaent-Normal-small.png" height="50" width="81"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/?page=home&home=true">Home</a></li>
        <li><a href="/?page=technology&home=false">Technology</a></li>
        <li><a href="/?page=entertainment&home=false">Entertainment</a></li>
		<li><a href="/?page=Social&home=false">Social</a></li>
		<li><a href="/?page=auto&home=false">Auto</a></li>
		<li><a href="/?page=travel&home=false">Travel</a></li>
		<li><a href="/?page=others&home=false">Others</a></li>
		<li><a href="/about.php">About</a></li>
		<li><a href="/contact.php">Contact Us</a></li>
		<li><a href="/privacy.php">Privacy Policy</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- ------------------------------------------------------------------->
 <br>
<div class="jumbotron text-center">
<h1 class="jumbtronTITLE">Feel Free To Contact Us</h1>
<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="post" name="up">
				<span class="contact100-form-title">
					Contact Us
				</span>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Name</span>
					<input class="input100" type="text" name="name" placeholder="Name...">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="email" placeholder="Email addess...">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100">
					<span class="label-input100">Phone</span>
					<input class="input100" type="text" name="phone" placeholder="Phone Number...">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">Message</span>
					<textarea class="input100" name="message" placeholder="Questions/Comments..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" onclick="valid();" >
							Send
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>
';
?>