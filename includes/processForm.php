<?php

require_once('PHPMailer/class.phpmailer.php');
require_once('PHPMailer/class.smtp.php');

//SET UP CAPTCHA
require_once "recaptchalib.php";

// Register API keys at http://www.google.com/recaptcha/admin
$siteKey = "6LdadyMTAAAAAC_PD6Il9BQV69UwkrT-eqMY9oet";
$secret = "6LdadyMTAAAAAISt5zZV9YhSk2UFFH0GYx8SFped";
// reCAPTCHA supported 40+ languages listed here: http://developers.google.com/recaptcha/docs/language
$lang = "en";

// The response from reCAPTCHA
$resp = null;
// The error code from reCAPTCHA, if any
$error = null;

$reCaptcha = new ReCaptcha($secret);

function clean_string($string) {
	$bad = array("content-type","bcc:","to:","cc:","href");		
	return str_replace($bad,"",$string);
}

//SET UP SMTP
$smtpUser 			= 'spokanehitsforhope@gmail.com';
$smtpPw 			= 'YKQBSNM2uyrnmcrZGzNYgf4D';
$mail     			= new PHPMailer(); 	// defaults to using php "mail()"
$mail->IsSMTP(); 						// enable SMTP
$mail->SMTPDebug 	= 0;  				// debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth 	= true;  			// authentication enabled
$mail->SMTPSecure 	= 'ssl'; 			// secure transfer enabled REQUIRED for GMail
$mail->Host 		= 'smtp.gmail.com';
$mail->Port 		= 465; 
$mail->Username 	= $smtpUser;  
$mail->Password 	= $smtpPw;

//FIGURE OUT WHICH FORM IS SUBMITTED
$formPath = parse_url($_SERVER['REQUEST_URI']);

if($formPath['path'] == '/contact/'){

	//RUN CONTACT FORM VALIDATION
	if(!empty($_POST)){

		// validation - expected data exists	
		if(!isset($_POST['first_name']) || !isset($_POST['last_name']) || !isset($_POST['email']) ||!isset($_POST['telephone']) ||!isset($_POST['comments'])) {
		    $_SESSION['formError'] = 'We are sorry, but there appears to be a problem with the form you submitted.';       
		}
		
		$first_name = $_POST['first_name']; // required
		$last_name = $_POST['last_name']; // required
		$email_from = $_POST['email']; // required
		$telephone = $_POST['telephone']; // not required 
		$comments = $_POST['comments']; // required
		$error_message = "";
		
		$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
		$string_exp = "/^[A-Za-z .'-]+$/";
		
		if(!preg_match($email_exp,$email_from)) {
			$_SESSION['emailError'] = 'The Email Address you entered does not appear to be valid.';	
		}
		
		if(!preg_match($string_exp,$first_name)) {
			$_SESSION['fNameError'] = 'The First Name you entered does not appear to be valid.';
		}
		 
		if(!preg_match($string_exp,$last_name)) {
			$_SESSION['lNameError'] = 'The Last Name you entered does not appear to be valid.';
		}
		
		if(strlen($comments) < 2) {
			$_SESSION['noteError'] = 'The Comments you entered do not appear to be valid.';
		}

		// Was there a reCAPTCHA response?
/*
		if ($_POST["g-recaptcha-response"]) {
		    $resp = $reCaptcha->verifyResponse(
		        $_SERVER["REMOTE_ADDR"],
		        $_POST["g-recaptcha-response"]
		    );
		}
		if ($resp != null && $resp->success) {
		    unset($_POST["g-recaptcha-response"]);
		}else{
			$_SESSION['gCaptchaError'] = 'Google is not responding at this time, please refresh the page and try again.';
		}
*/
		
		if(empty($_SESSION)) {
			unset($_SESSION);
			$first_name = clean_string($first_name);
			$last_name = clean_string($last_name);
			$email_from = clean_string($email_from);
			$telephone = clean_string($telephone);
			$comments = clean_string($comments);
				
// 			$email_to = "mckayla.elliott95@gmail.com"; //H4H ADMIN
			$email_to = "ryangauthier6@gmail.com"; //H4H ADMIN
			$email_subject = "Hits for Hope Contact Form";
		    $email_message  = "Form details below.<br/>";
		    $email_message .= "First Name: " . $first_name . "<br/>";
		    $email_message .= "Last Name: " . $last_name . "<br/>";
		    $email_message .= "Email: " . $email_from . "<br/>";
		    $email_message .= "Telephone: " . $telephone . "<br/>";
		    $email_message .= "Comments: " . $comments . "<br/>";
		
			$mail->AddReplyTo($email_from,clean_string($first_name) . " " . clean_string($last_name));
			
			$mail->SetFrom($smtpUser,clean_string($first_name) . " " . clean_string($last_name));
			
/*
			$mail->AddAddress($email_to, "McKayla Elliott");
			$mail->AddBCC('spokanehitsforhope@gmail.com', "Hits for Hope Admin");
*/
			$mail->AddAddress($email_to, "Ryan Gauthier");
			
			$mail->Subject    = $email_subject;
			
			$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
			
			$mail->MsgHTML($email_message);
						
			if($mail->Send()) {
				$_SESSION['success'] = 'Thanks for your submission! You will hear from us shortly.';
			} else {
				$_SESSION['noteError'] = 'Something seems to have gone wrong, please try again later.';
			}		
					
		} 
	}
	
}else{
	//RUN SIGNUP FORM VALIDATION
	if(!empty($_POST) && $_POST['formType'] == 'teamSignup'){
		
		// validation - expected data exists	
		if(!isset($_POST['captain_name']) || !isset($_POST['team_name']) || !isset($_POST['team_email'])) {
		    $_SESSION['formError'] = 'We are sorry, but there appears to be a problem with the form you submitted.';       
		
		}
		
		$captain_name = $_POST['captain_name']; // required
		$team_name = $_POST['team_name']; // required
		$email_from = $_POST['team_email']; // required
		
		$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
		$string_exp = "/^[A-Za-z0-9._\s%-]+$/";
		
		if(!preg_match($email_exp,$email_from)) {
			$_SESSION['emailError'] = 'The Email Address you entered does not appear to be valid.';	
		}
		
		if(!preg_match($string_exp,$captain_name)) {
			$_SESSION['cNameError'] = 'Please enter a valid name for your team captain.';
		}

		if(!preg_match($string_exp,$team_name)) {
			$_SESSION['tNameError'] = 'Please enter a valid name for your team.';
		}

		// Was there a reCAPTCHA response?
		if ($_POST["g-recaptcha-response"]) {
		    $resp = $reCaptcha->verifyResponse(
		        $_SERVER["REMOTE_ADDR"],
		        $_POST["g-recaptcha-response"]
		    );
		}
		if ($resp != null && $resp->success) {
		    unset($_POST["g-recaptcha-response"]);
		}else{
			$_SESSION['gCaptchaError'] = 'Google is not responding at this time, please refresh the page and try again.';
		}		
		 		
		if(empty($_SESSION)) {
			unset($_SESSION);
			$captain_name = clean_string($captain_name);
			$team_name = clean_string($team_name);
			$email_from = clean_string($email_from);
				
			$email_to = "mckayla.elliott95@gmail.com"; //H4H ADMIN
			$email_subject = "Hits for Hope Sign-up";
		    $email_message  = "Team information below.<br/>";
		    $email_message .= "Captain's Name: " . $captain_name . "<br/>";
		    $email_message .= "Team Name: " . $team_name . "<br/>";
		    $email_message .= "Email: " . $email_from . "<br/>";

			//GET ATTACHMENT READY
			$upload = $_FILES['signup']['name'];
			$upload_array = explode('.', $upload);
			$file_ext = $upload_array[1];
			$acceptable_files = array('pdf', 'png', 'jpg', 'jpeg');
			$accept_file = in_array($file_ext, $acceptable_files);
			
			$file_name = str_ireplace(' ', '_', $team_name);
			$signup_file = $file_name . '_signup' . date('MdY', time()) . '.' . $file_ext;
			move_uploaded_file($_FILES['signup']['tmp_name'], './uploads/' . $signup_file);	
	
			$mail->AddReplyTo($email_from, $captain_name);
			
			$mail->SetFrom($smtpUser, $captain_name);
			
			$mail->AddAddress($email_to, "McKayla Elliott");
			$mail->AddCC('megan_filer@yahoo.com', "Megan Filer");
			$mail->AddCC('h.craddock@ymail.com', "Helena Craddock");
			$mail->AddBCC('spokanehitsforhope@gmail.com', "Hits for Hope Admin");
			
			
			$mail->Subject    = $email_subject;
			
			$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
			
			$mail->MsgHTML($email_message);
			
			$mail->AddAttachment("./uploads/" . $signup_file);      // attachment
			
			if($accept_file && $mail->Send()) {
				$_SESSION['success'] = 'Thanks for your submission! You will hear from us shortly.';
			} else {
				$_SESSION['fTypeError'] = 'Please upload your application as a pdf, png, or jpg.';
			}		
					
		} 
	}else if(!empty($_POST)){
		
		// validation - expected data exists	
		if(!isset($_POST['sponsor_name']) || !isset($_POST['sponsor_email'])) {
		    $_SESSION['formError'] = 'We are sorry, but there appears to be a problem with the form you submitted.';       
		
		}
		
		$sponsor_name = $_POST['sponsor_name']; // required
		$corporation_name = $_POST['corporation_name']; // required
		$email_from = $_POST['sponsor_email']; // required
		
		$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
		$string_exp = "/^[A-Za-z0-9._\s%-]+$/";
		
		if(!preg_match($email_exp,$email_from)) {
			$_SESSION['sponEmailError'] = 'The Email Address you entered does not appear to be valid.';	
		}
		
		if(!preg_match($string_exp,$sponsor_name)) {
			$_SESSION['sNameError'] = 'Please enter a valid name as a sponsor.';
		}

		// Was there a reCAPTCHA response?
		if ($_POST["g-recaptcha-response"]) {
		    $resp = $reCaptcha->verifyResponse(
		        $_SERVER["REMOTE_ADDR"],
		        $_POST["g-recaptcha-response"]
		    );
		}
		if ($resp != null && $resp->success) {
		    unset($_POST["g-recaptcha-response"]);
		}else{
			$_SESSION['gCaptchaError'] = 'Google is not responding at this time, please refresh the page and try again.';
		}		
		 		
		if(empty($_SESSION)) {
			unset($_SESSION);
			$sponsor_name = clean_string($sponsor_name);
			$corporation_name = !empty($corporation_name) ? clean_string($corporation_name) : 'none';
			$email_from = clean_string($email_from);
				
			$email_to = "mckayla.elliott95@gmail.com"; //H4H ADMIN
			$email_subject = "Hits for Hope Sponsorship";
		    $email_message  = "Sponsorship information below.<br/>";
		    $email_message .= "Sponsor's Name: " . $sponsor_name . "<br/>";
		    $email_message .= "Team Name: " . $corporation_name . "<br/>";
		    $email_message .= "Email: " . $email_from . "<br/>";

			//GET ATTACHMENT READY
			$upload = $_FILES['sponsor']['name'];
			$upload_array = explode('.', $upload);
			$file_ext = $upload_array[1];
			$acceptable_files = array('pdf', 'png', 'jpg', 'jpeg');
			$accept_file = in_array($file_ext, $acceptable_files);
			
			$file_name = str_ireplace(' ', '_', $sponsor_name);
			$signup_file = $file_name . '_sponsor' . date('MdY', time()) . '.' . $file_ext;
			move_uploaded_file($_FILES['sponsor']['tmp_name'], './uploads/' . $signup_file);	
	
			$mail->AddReplyTo($email_from, $sponsor_name);
			
			$mail->SetFrom($smtpUser, $sponsor_name);
			
			$mail->AddAddress($email_to, "McKayla Elliott");
			$mail->AddBCC('spokanehitsforhope@gmail.com', "Hits for Hope Admin");
			
			
			$mail->Subject    = $email_subject;
			
			$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
			
			$mail->MsgHTML($email_message);
			
			$mail->AddAttachment("./uploads/" . $signup_file);      // attachment
			
			if($accept_file && $mail->Send()) {
				$_SESSION['success'] = 'Thanks for your sponsorship! You will hear from us shortly.';
			} else {
				$_SESSION['sponTypeError'] = 'Please upload your application as a pdf, png, or jpg.';
			}		
					
		} 
	}
}

?>