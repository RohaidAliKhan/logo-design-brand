<?php
	session_start();
    ini_set('display_errors', 1); 

	require_once '../vendor/autoload.php';

	use Stripe\StripeClient;
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	require '../vendor/phpmailer/phpmailer/src/Exception.php';
	require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
	require '../vendor/phpmailer/phpmailer/src/SMTP.php';


	include 'config.php';

    $selected_services = [];
	if (isset($_POST['app_service']) && !empty($_POST['app_service'])) {
		
		$selected_services = $_POST['app_service'];
		
		
		if (in_array('Other', $selected_services)) {
			
			if (isset($_POST['other_text']) && !empty($_POST['other_text'])) {
				$selected_services[] = 'Other: ' . trim($_POST['other_text']);
			}
		}
	}
    
	$action = $_GET['action'];
	if($action == 'order_form'){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$number = $_POST['phone'];
		$url = $_POST['url'];
		$domain = $_POST['domain'];
		$subject = $_POST['subject'];

		$_SESSION['name'] = $name;
		$_SESSION['email'] = $email;
		$_SESSION['phone'] = $number;
		$_SESSION['package_name'] = $_POST['optional']['package_name'];
		$_SESSION['package_price'] = $_POST['optional']['package_price'];

		if(isset($_POST['optional'])){
			$optional = $_POST['optional'];
		}else{
			$optional = null;
		}
		$reCaptchaToken = $_POST['recaptcha_token'];
      	$postArray = array(
    		'secret' => GOOGLE_RECAPTCHA_SECRET_KEY,
    		'response' => $reCaptchaToken
		);
      	$postJSON = http_build_query($postArray);
      	$curl = curl_init();
      	curl_setopt($curl, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
      	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      	curl_setopt($curl, CURLOPT_POST, 1);
      	curl_setopt($curl, CURLOPT_POSTFIELDS, $postJSON);
      	$response = curl_exec($curl);
      	curl_close($curl);
      
      	$curlResponseArray = json_decode($response, true);
     	
      	if ($curlResponseArray["success"] == true && ! empty($curlResponseArray["action"]) && $curlResponseArray["score"] >= 0.5) {
			$return_param = send_mail_to_admin($name, null, $email, $number, $url, $domain, $subject, null, null, ADMIN_EMAIL, $optional);
			$senderRequest = array(
				'name' => $name,
				'email' => $email,
				'contact' => $number,
				'url' => $url,
				'message' => null,
				'subject' => $subject,
				'domain' => $domain
			);
			sendLeadToTerminal($senderRequest);
			echo json_encode(array('response' => $return_param, 'package_name' => $_POST['optional']['package_name']));
		}else{
          	echo json_encode(array('response' => 'Invalid request.', 'status' => false));
        }
	}else if($action == 'logo_form'){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$number = $_POST['phone'];
		$url = $_POST['url'];
		$domain = $_POST['domain'];
		$subject = $_POST['subject'];
		if(isset($_POST['optional'])){
			$optional = $_POST['optional'];
		}else{
			$optional = null;
		}
		$reCaptchaToken = $_POST['recaptcha_token'];
      	$postArray = array(
    		'secret' => GOOGLE_RECAPTCHA_SECRET_KEY,
    		'response' => $reCaptchaToken
		);
      	$postJSON = http_build_query($postArray);
      	$curl = curl_init();
      	curl_setopt($curl, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
      	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      	curl_setopt($curl, CURLOPT_POST, 1);
      	curl_setopt($curl, CURLOPT_POSTFIELDS, $postJSON);
      	$response = curl_exec($curl);
      	curl_close($curl);
      
      	$curlResponseArray = json_decode($response, true);
     	
      	if ($curlResponseArray["success"] == true && ! empty($curlResponseArray["action"]) && $curlResponseArray["score"] >= 0.5) {
			$return_param = send_mail_to_admin($name, null, $email, $number, $url, $domain, $subject, null, null, ADMIN_EMAIL, $optional);
			$senderRequest = array(
				'logo_info' => $optional['Logo Info'],
				'selected_logo' => $optional['Selected Logo'],
				'brief_text' => $optional['Brief Text'],
				'brief_tagline' => $optional['Brief Tagline'],
				'brief_description' => $optional['Brief Description'],
				'design_concept' => $optional['Design Concept'],
				'existing_website' => $optional['Existing Website'],
				'client_id' => $optional['CRM Id'],
				'email' => $email
			);
			sendLogoFormToTerminal($senderRequest);
			echo json_encode(array('response' => $return_param, 'package_name' => $_POST['optional']['package_name']));
		}else{
          	echo json_encode(array('response' => 'Invalid request.', 'status' => false));
        }
	}else if($action == 'form_submission'){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$message = $_POST['message'];
		$url = $_POST['url'];
		$domain = $_POST['domain'];
		$subject = $_POST['subject'];
		if(isset($_POST['optional'])){
			$optional = $_POST['optional'];
		}else{
			$optional = null;
		}
		$return_param = send_mail_to_admin($name, null, $email, $phone, $url, $domain, $subject, null, $message, ADMIN_EMAIL, $optional);
		echo json_encode(array('response' => $return_param));
	}else if($action == 'landing_page'){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$message = $_POST['message'];
		$url = $_POST['url'];
		$domain = $_POST['domain'];
		$subject = $_POST['subject'];
		if(isset($_POST['optional'])){
			$optional = $_POST['optional'];
		}else{
			$optional = null;
		}
      	$reCaptchaToken = $_POST['recaptcha_token'];
      	$postArray = array(
    		'secret' => GOOGLE_RECAPTCHA_SECRET_KEY,
    		'response' => $reCaptchaToken
		);
      	$postJSON = http_build_query($postArray);
      	$curl = curl_init();
      	curl_setopt($curl, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
      	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      	curl_setopt($curl, CURLOPT_POST, 1);
      	curl_setopt($curl, CURLOPT_POSTFIELDS, $postJSON);
      	$response = curl_exec($curl);
      	curl_close($curl);
      
      	$curlResponseArray = json_decode($response, true);
     	
      	if ($curlResponseArray["success"] == true && ! empty($curlResponseArray["action"]) && $curlResponseArray["score"] >= 0.5) {
          	$return_param = send_mail_to_admin($name, null, $email, $phone, $url, $domain, $subject, null, $message, ADMIN_EMAIL, $optional);
			$senderRequest = array(
				'name' => $name,
				'email' => $email,
				'contact' => $phone,
				'url' => $url,
				'message' => $message,
				'subject' => $subject,
				'domain' => $domain
			);
			sendLeadToTerminal($senderRequest);
	    	echo json_encode(array('response' => $return_param, 'status' => true));
        }else{
          	echo json_encode(array('response' => 'Invalid request.', 'status' => false));
        }
	}else if($action == 'payment_form'){
		$data = $_POST;

		$city = $_POST['city'];
		$country = $_POST['country'];
		$address = $_POST['address'];
		$zip = $_POST['zip'];
		$state = $_POST['state'];

		$email = $_POST['email'];
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$crm_id = $_POST['crm_cus_id'];

		$package_name = $_POST['package_name'];
		$itemPrice = $_POST['total_price'];
		$itemPrice = str_replace('$', '', $itemPrice);
		$tokenid = $_POST['stripeToken'];
		$itemPriceCents = round(((float)$itemPrice) * 100);

		try {

			$stripe = new \Stripe\StripeClient(STRIPE_SECRET);

			$customer = $stripe->customers->create([
				'name' => $name,
				'email' => $email,
				'phone' => $phone,
				'source' => $tokenid
			]);

			$charge = $stripe->charges->create([
				'amount' => $itemPriceCents,
				'currency' => 'usd',
				'customer' => $customer->id,
				'description' => $package_name,
				'receipt_email' => $email
			]);
			$chargeJson = $charge->jsonSerialize();
			if ($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1) {
				$postRequest = array(
					'name' => $name,
					'email' => $email,
					'phone' => $phone,
					'package_name' => $package_name,
					'amount' => $itemPrice,
					'transaction_id' => $chargeJson['id'],
					'payment_status' => $chargeJson['status'],
					'crm_id' => $crm_id
				);
				$return_param = send_mail_to_admin($name, null, $email, $phone, null, null, 'Payment', null, null, ADMIN_EMAIL, $postRequest);
				sendPaymentToTerminal($postRequest, $chargeJson);
				echo json_encode(array('status' => true));
			}
		} catch (\Stripe\Exception\CardException $e) {
			echo json_encode(array('status' => false, 'message' => $e->getError()->message));
		} catch (\Stripe\Exception\RateLimitException $e) {
			echo json_encode(array('status' => false, 'message' => $e->getError()->message));
		} catch (\Stripe\Exception\InvalidRequestException $e) {
			echo json_encode(array('status' => false, 'message' => $e->getError()->message));
		} catch (\Stripe\Exception\AuthenticationException $e) {
			echo json_encode(array('status' => false, 'message' => $e->getError()->message));
		} catch (\Stripe\Exception\ApiConnectionException $e) {
			echo json_encode(array('status' => false, 'message' => $e->getError()->message));
		} catch (\Stripe\Exception\ApiErrorException $e) {
			echo json_encode(array('status' => false, 'message' => $e->getError()->message));
		} catch (Exception $e) {
			echo json_encode(array('status' => false, 'message' => $e->getMessage()));
		}
	}

	function sendPaymentToTerminal($postRequest, $chargeObject){
		$postRequest['charge_object'] = json_encode($chargeObject);
		$postRequest['stripe'] = STRIPE_KEY;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, TERMINAL."api/submit-payment");
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postRequest);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$headers = array(
			"Accept: application/json",
			"Authorization: " . TERMINAL_BRAND,
			"custom-auth: " . TERMINAL_BRAND,
		);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$server_output = curl_exec($ch);
		$data = json_decode($server_output, true);
		curl_close($ch);
		return $data;
	}

	function sendLogoFormToTerminal($senderRequest){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, TERMINAL."api/logo-brief");
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $senderRequest);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$headers = array(
			"Accept: application/json",
			"Authorization: ". TERMINAL_BRAND,
			"custom-auth: ". TERMINAL_BRAND,
		);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$server_output = curl_exec($ch);
		$data = json_decode($server_output, true);
		curl_close($ch);
		return $data;
	}

	function sendLeadToTerminal($senderRequest){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, TERMINAL."api/leads");
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $senderRequest);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$headers = array(
			"Accept: application/json",
			"Authorization: ". TERMINAL_BRAND,
			"custom-auth: ". TERMINAL_BRAND,
		);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$server_output = curl_exec($ch);
		$data = json_decode($server_output, true);
		$_SESSION["crm_cus_id"] = $data['message'];
		curl_close($ch);
		return $data;
	}

	function insert_into_table($f_name, $l_name, $email, $number, $url, $domain, $subject, $conn, $services, $message){
		$sql = "INSERT INTO leads (f_name, l_name, email, phone, url, domain, subject, services, message)
				VALUES ('$f_name', '$l_name', '$email', '$number', '$url', '$domain', '$subject', '$services', '$message')";
	 	if ($conn->query($sql)) {
	 		$last_id = $conn->insert_id;
	 		$_SESSION["customer_email"] = $email;
	 		$_SESSION["customer_phone"] = $number;
	 		$_SESSION["customer_url"] = $url;
	 		$_SESSION["customer_id"] = $last_id;
	 		return $last_id;
	 	}
	 	return 0;
	}

	function send_mail_to_admin($f_name, $l_name, $email, $number, $url, $domain, $subject, $services, $param_message, $admin_email, $optional){
		$to = ADMIN_EMAIL;
		$subject = $subject;
		$from = $email;
		// $optional = json_encode($optional);
		$rows = "<tr><td class='label'>First Name:</td><td class='value'>{$f_name}</td></tr>";

		if (!empty($l_name)) {
			$rows .= "<tr><td class='label'>Last Name:</td><td class='value'>{$l_name}</td></tr>";
		}

		$rows .= "
		<tr><td class='label'>Email:</td><td class='value'>{$email}</td></tr>
		<tr><td class='label'>Number:</td><td class='value'>{$number}</td></tr>
		<tr><td class='label'>URL:</td><td class='value'>{$url}</td></tr>
		<tr><td class='label'>Domain:</td><td class='value'>{$domain}</td></tr>
		";

		if (!empty($services)) {
			$rows .= "<tr><td class='label'>Service:</td><td class='value'>{$services}</td></tr>";
		}

		if (!empty($param_message)) {
			$rows .= "<tr><td class='label'>Message:</td><td class='value'>{$param_message}</td></tr>";
		}

		if (!empty($optional) && is_array($optional)) {
			foreach ($optional as $key => $value) {
				$label = ucwords(str_replace("_", " ", $key));
				$rows .= "<tr><td class='label'>{$label}:</td><td class='value'>{$value}</td></tr>";
			}
		}

		// Build HTML Email Template
		$message = "
		<html>
		<head>
		<style>
			body {
			font-family: Arial, sans-serif;
			background-color: #f7f7f7;
			padding: 20px;
			}
			.email-container {
			background: #ffffff;
			border-radius: 8px;
			padding: 20px;
			max-width: 600px;
			box-shadow: 0 2px 8px rgba(0,0,0,0.1);
			}
			h2 {
			color: #333333;
			margin-bottom: 20px;
			}
			table {
			width: 100%;
			border-collapse: collapse;
			}
			td {
			padding: 10px;
			border-bottom: 1px solid #eeeeee;
			vertical-align: top;
			}
			.label {
			font-weight: bold;
			color: #555555;
			width: 150px;
			}
			.value {
			color: #333333;
			}
		</style>
		</head>
		<body>
		<div class='email-container'>
			<h2>New Contact Form Submission</h2>
			<table>
			{$rows}
			</table>
		</div>
		</body>
		</html>
		";

		// PHPMailer
		$mail = new PHPMailer();

		try {
			$mail->SMTPOptions = array(
				'ssl' => array(
					'verify_peer' => false,
					'verify_peer_name' => false,
					'allow_self_signed' => true
				)
			);
			
			$mail->SMTPDebug = 0;
			$mail->isSMTP();
			$mail->Host       = 'smtp.gmail.com';
			$mail->SMTPAuth   = true;
			$mail->Username   = ADMIN_EMAIL_SENDER;
			$mail->Password   = ADMIN_APP_PASSWORD;
			$mail->SMTPSecure = 'ssl';
			$mail->Port       = 465; 

			$mail->setFrom($to, WEBSITE_NAME);
			$mail->addAddress($to, WEBSITE_NAME);
			$mail->addAddress(ADMIN_EMAIL, WEBSITE_NAME);
			$mail->addAddress('daniellhouston545@gmail.com', WEBSITE_NAME);

			$mail->isHTML(true);
			$mail->Subject = $subject;
			$mail->Body    = $message;

			// Plain text fallback
			$mail->AltBody = "New contact form submission\n
			First Name: $f_name
			Last Name: $l_name
			Email: $email
			Number: $number
			URL: $url
			Domain: $domain
			Service: $services
			Message: $param_message";

			$mail->send();
		} catch (Exception $e) {
			// Log error if needed
			error_log("Mailer Error: " . $mail->ErrorInfo);
		}

		if($email == null){
			$email = 'noemail'.uniqid().'@'.uniqid().'.com';
		}

		// $postRequest = array(
        //         'name' => $f_name,
        //         'l_name' => $l_name,
        //         'email' => $email,
        //         'contact' => $number,
        //         'url' => $url,
        //         'domain' => $domain,
        //         'services' => $services,
        //         'message' => $param_message,
        //         'optional' => $optional,
        //     );
        // $ch = curl_init();
        // curl_setopt($ch, CURLOPT_URL,"https://syncwavecrm.com/api/leads");
        // curl_setopt($ch, CURLOPT_POST, 1);
        // curl_setopt($ch, CURLOPT_POSTFIELDS, $postRequest);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $headers = array(
        //     "Accept: application/json",
        //     "Authorization: d1ded9f889ad3c8794ee0fe8bb1a36460393db36",
        //     "custom-auth: d1ded9f889ad3c8794ee0fe8bb1a36460393db36",
        // );
        // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        // curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // $server_output = curl_exec($ch);
        // $data = json_decode($server_output, true);
        // $_SESSION["crm_cus_id"] = $data['message'];
        // curl_close ($ch);

		return true;
	}
?>