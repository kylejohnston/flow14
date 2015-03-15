<?php
//If the form is submitted
if(isset($_POST['submit'])) {

	//Check to make sure that the name field is not empty
	if(trim($_POST['contactname']) == '') {
		$hasError = true;
	} else {
		$name = trim($_POST['contactname']);
	}

	//Check to make sure that the subject field is not empty
	if(trim($_POST['subject']) == '') {
		$hasError = true;
	} else {
		$subject = trim($_POST['subject']);
	}

	//Check to make sure sure that a valid email address is submitted
	if(trim($_POST['email']) == '')  {
		$hasError = true;
	} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	//Check to make sure comments were entered
	if(trim($_POST['message']) == '') {
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['message']));
		} else {
			$comments = trim($_POST['message']);
		}
	}

	//If there is no error, send the email
	if(!isset($hasError)) {
		$emailTo = 'hello@flow14.com'; //Put your own email address here
		$body = "Name: $name \n\nEmail: $email \n\nSubject: $subject \n\nComments:\n $comments";
		$headers = 'From: A message from flow14.com from <'.$email.'>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Contact flow14 - Design Works.</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Contact flow14">
	<meta name="author" content="Kyle Johnston">
	<?php include('includes/head.php'); ?>
</head>
<body>
	<?php include('includes/header-nav.php'); ?>
	<div class="container items" itemscope itemtype="http://schema.org/LocalBusiness">
		<h1>Let’s Talk.</h1>
		<div class="row">
			<div class="span4">
				<h2>Email</h2>
				<!--<p>For new business inquiries, please contact <a href="#">Hello (at) flow14.com</a></p>-->

				<div id="contactWrapper" role="form">
					<?php if(isset($hasError)) { //If errors are found ?>
					<p class="error">Please check if you've filled all the fields with valid information and try again. Thank you.</p>
					<?php } ?>
					
					<?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
					<div class="success">
						<h3>Thank You</h3>
						<p>Thank you for contacting flow14, <?php echo $name;?>. Your email was successfully sent and we’ll be in touch with you soon.</p>
					</div>
					<?php } ?>
					
					<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">
						<div class="stage clear">
							<label for="name">Name: <em>*</em></label>
							<input type="text" name="contactname" id="contactname" value="" class="required" role="input" aria-required="true" />
						</div>
						
						<div class="stage clear">
							<label for="email" >Email: <em>*</em></label>
							<input type="email" name="email" id="email" value="" class="required email" role="input" aria-required="true" />
						</div>
						
						<div class="stage clear">
							<label for="subject">Subject: <em>*</em></label>
							<input type="text" name="subject" id="subject" value="" class="required" role="input" aria-required="true" />
						</div>
						
						<div class="stage clear">
							<label for="message">Message: <em>*</em></label>
							<textarea rows="8" name="message" id="message" class="required" role="textbox" aria-required="true"></textarea>
						</div>
						
						<p class="requiredNote"><em>*</em> Denotes a required field.</p>
						
						<input class="btn" type="submit" value="Send Message" name="submit" id="submitButton" title="Click here to submit your message!" />
					</form>
				</div>
			</div>
			<div class="span4">
				<h2>Phone</h2>
				<p itemprop="telephone">913 738-4080</p>
			</div>
			<div class="span4">
				<h2>Elsewhere</h2>
				<p>
					<a class="linkedin" href="http://www.linkedin.com/in/kylejohnston">LinkedIn</a><br>
					<a class="twitter" href="https://twitter.com/creativecohort">Twitter</a><br>
					<a class="instagram" href="https://instagram.com/kylejohnston/">Instagram</a><br>
					<a class="dribbble" href="https://dribbble.com/kylejohnston">dribbble</a><br>
					<a class="github" href="https://github.com/kylejohnston">GitHub</a><br>
					<a class="behance" href="https://www.behance.net/KyleJohnston">Behance</a><br>
					<a class="flickr" href="http://www.flickr.com/photos/flow14/">Flickr</a><br>
					<a class="vsco" href="http://kylejohnston.vsco.co/">VSCO</a><br>
					<a class="vimeo" href="http://vimeo.com/kylejohnston">Vimeo</a><br>
				</p>
			</div>
		</div>
	</div>
	<div class="container marketing">
		<?php include('includes/footer.php'); ?>
	</div>
	<?php include('includes/foot.php'); ?>
</body>
</html>
