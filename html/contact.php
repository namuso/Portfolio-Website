<div class="description-container">
	<h6>Let's get in touch!</h6>
	<form class="contact-form" action="index.php" method="post" name="contactform">
	<?php
 	    $scroll_contact = "";
		$inp_email = '<input name="from" type="text" placeholder="Email" ';
		$inp_subject = '<input name="subject" type="text" placeholder="Subject" ';
		$inp_message = '<textarea name="message" placeholder="Message..." ';
		$btn_submit = '<input type="submit" value="Send" />';
		$comments = "";

		if(isset($_POST['from'])) {
			$scroll_contact = "<script>document.querySelector('#contact').scrollIntoView({ behavior: 'smooth' })</script>";

			// Set contents of Email  
		  	$email_to = "amuson1@tcnj.edu";
		  	$email_from = $_POST['from']; // required 
		  	$email_subject = $_POST['subject']; //"Contact Form Submission"; 
		  	$comments = $_POST['message']; // required

		  	$inp_email .= 'value="'.$email_from.'" ';
			$inp_subject .= 'value="'.$email_subject.'" ';
		
			// Locate and Report Errors
		  	$error_message = "";
		  	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

		  	if(!preg_match($email_exp,$email_from)) { 
				$error_message = '<h5>Invalid Email Address</h5>';
				$inp_email = $error_message.$inp_email.'class="form-error" ';
			}

			if(strlen($email_subject) < 1) {
    			$error_message = '<h5>Invalid Subject</h5>';
    			$inp_subject = $error_message.$inp_subject.'class="form-error" ';
  			}

			if(strlen($comments) < 2) {
				$error_message = '<h5>Invalid Message</h5>';
				$inp_message = $error_message.$inp_message.'class="form-error" ';
			}
			
			if(strlen($error_message) < 1) {
			  	// Filter message contents
			  	function clean_string($string) {
			    	$bad = array("content-type","bcc:","to:","cc:","href");
			    	return str_replace($bad,"",$string);
			  	}
				 
				// Construct Email Message
				$email_subject = "[namuso.com] ".$email_subject;
				$email_message = clean_string($comments)."\n\n";
				$email_message .= clean_string($email_from)."\n";
				  
				// Generate email headers
				$headers = 'From: '.$email_from."\r\n".'Reply-To: '.$email_from."\r\n".'X-Mailer: PHP/'.phpversion();
				@mail($email_to, $email_subject, $email_message, $headers);  
				
				// Success
				$inp_email .= 'class="form-disabled" disabled';
				$inp_subject .= 'class="form-disabled" disabled';
				$inp_message .= 'class="form-disabled" disabled';
				$btn_submit = '<h4>Message Sent!</h4><a href="http://www.tcnj.edu/~amuson1/#contact"><input type="button" value="Send Another" /></a>';
			}
		}

		// Close tags
		$inp_email .= '/>';
		$inp_subject .= '/>';
		$inp_message .= '>'.$comments.'</textarea>';

		// Output updated form
		echo $inp_email;
		echo $inp_subject;
		echo $inp_message;
		echo $btn_submit;
	?>  
	</form>
</div>
<div class="contact-container">
	<a href="mailto:nicholas.amuso@gmail.com"><i class="fa fa-tumblr-square" aria-hidden="true"></i></a>
    <a href="https://github.com/namuso"><i class="fa fa-github" aria-hidden="true"></i></a>
	<a href="https://www.linkedin.com/in/namuso"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
</div>

<?php
	echo $scroll_contact;
?>
