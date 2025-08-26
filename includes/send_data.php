<?php
	session_start();
    ini_set('display_errors', 1); 

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
	    	echo json_encode(array('response' => $return_param, 'status' => true));
        }else{
          	echo json_encode(array('response' => 'Invalid request.', 'status' => false));
        }
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