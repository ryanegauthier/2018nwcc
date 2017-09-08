<?php

require_once('PHPMailer/class.phpmailer.php');
require_once('PHPMailer/class.smtp.php');

//SET UP CAPTCHA
require_once "recaptchalib.php";

// Register API keys at http://www.google.com/recaptcha/admin
$siteKey = "6LcAjy8UAAAAAG9t632yzQ7IgGgL0rBSl_1SgWBd";
$secret = "6LcAjy8UAAAAAPZwgH3WdVzXyrfcOxWyNDxDgyr8";
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
$smtpUser 				= '2018nwcc@gmail.com';
$smtpPw 					= 'Colossians323';
$mail     				= new PHPMailer(); 	// defaults to using php "mail()"
$mail->IsSMTP(); 						// enable SMTP
$mail->SMTPDebug 	= 0;  				// debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth 	= true;  			// authentication enabled
$mail->SMTPSecure = 'ssl'; 			// secure transfer enabled REQUIRED for GMail
$mail->Host 			= 'smtp.gmail.com';
$mail->Port 			= 465;
$mail->Username 	= $smtpUser;
$mail->Password 	= $smtpPw;

// echo ("<pre>" + $_SERVER['REQUEST_URI'] + "</pre>");
//FIGURE OUT WHICH FORM IS SUBMITTED
$formPath = parse_url($_SERVER['REQUEST_URI']);
// echo ("<pre>" + $formPath + "</pre>");

if($formPath['path'] == '/contact/'){

	// echo ("<pre>" + $_POST + "</pre>");
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
		// if ($_POST["g-recaptcha-response"]) {
		//     $resp = $reCaptcha->verifyResponse(
		//         $_SERVER["REMOTE_ADDR"],
		//         $_POST["g-recaptcha-response"]
		//     );
		// }
		// if ($resp != null && $resp->success) {
		//     unset($_POST["g-recaptcha-response"]);
		// }else{
		// 	$_SESSION['gCaptchaError'] = 'Google is not responding at this time, please refresh the page and try again.';
		// }
		// echo ("<pre>" + $_SESSION + "</pre>");

		if(empty($_SESSION)) {
			unset($_SESSION);
			$first_name = clean_string($first_name);
			$last_name = clean_string($last_name);
			$email_from = clean_string($email_from);
			$telephone = clean_string($telephone);
			$comments = clean_string($comments);

			$email_to = "ryangauthier6@gmail.com";
			$email_subject = "2018 NWCC Contact Form";
		    $email_message  = "Form details below.<br/>";
		    $email_message .= "First Name: " . $first_name . "<br/>";
		    $email_message .= "Last Name: " . $last_name . "<br/>";
		    $email_message .= "Email: " . $email_from . "<br/>";
		    $email_message .= "Telephone: " . $telephone . "<br/>";
		    $email_message .= "Comments: " . $comments . "<br/>";

			$mail->AddReplyTo($email_from,clean_string($first_name) . " " . clean_string($last_name));

			$mail->SetFrom($smtpUser,clean_string($first_name) . " " . clean_string($last_name));

			$mail->AddAddress($email_to, "Ryan Gauthier");

			$mail->Subject    = $email_subject;

			$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

			$mail->MsgHTML($email_message);

// echo ("<pre>" + $mail->Send() + "</pre>");

			if($mail->Send()) {
				$_SESSION['success'] = 'Thanks for your submission! You will hear from us shortly.';
			} else {
				$_SESSION['noteError'] = 'Something seems to have gone wrong, please try again later.';
			}

		}
	}
}

?>
