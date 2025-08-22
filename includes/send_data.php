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
		$f_name = $_POST['f_name'];
		$l_name = $_POST['l_name'];
		$email = $_POST['email'];
		$number = $_POST['number'];
		$url = $_POST['url'];
		$domain = $_POST['domain'];
		$subject = $_POST['subject'];
		$return_table = insert_into_table($f_name, $l_name, $email, $number, $url, $domain, $subject, $conn, null, null);
		$return_param = send_mail_to_admin($f_name, $l_name, $email, $number, $url, $domain, $subject, null, null, ADMIN_EMAIL, null);
		echo json_encode(array('response' => $return_param, 'response_table' => $return_table));
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
		// $return_table = insert_into_table($name, null, $email, $phone, $url, $domain, $subject, $conn, null, $message);
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
		// $return_table = insert_into_table($name, null, $email, $phone, $url, $domain, $subject, $conn, null, $message);
	}else if($action == 'newsletter'){
		// $email = $_POST['email'];
		$url = $_POST['url'];
		$domain = $_POST['domain'];
		$subject = $_POST['subject'];
		$return_table = insert_into_table(null, null, null,null, $url, $domain, $subject, $conn, null, null);
		$return_param = send_mail_to_admin(null, null,null,  null, $url, $domain, $subject, null, null, ADMIN_EMAIL, null);
		echo json_encode(array('response' => $return_param, 'response_table' => $return_table));
	}else if($action == 'web_brief'){
		
		$company = $_POST['company'];
		$contact = $_POST['contact'];
	    $address = $_POST['address'];
	    $email = $_POST['email'];
	    $city = $_POST['city'];
	    $phone_numbers = $_POST['phone_numbers'];
	    $website_address = $_POST['website_address'];
	    $decision_makers = $_POST['decision_makers'];
	    $about_company = $_POST['about_company'];
	    $purpose = implode(', ',  $_POST['purpose']);
 		$deadline = $_POST['deadline'];
		$potential_clients = $_POST['potential_clients'];
		$competitor = $_POST['competitor'];
		$user_perform =  implode(', ',  $_POST['user_perform']);
		$page = implode(', ',  $_POST['page']);
		$content_notes = implode(', ',  $_POST['content_notes']);
		$written_content = $_POST['written_content'];
		$copywriting_photography_services = $_POST['copywriting_photography_services'];
		$re_design = $_POST['re_design'];
		$working_current_site = $_POST['working_current_site'];
		$working_current_explain = $_POST['working_current_explain'];
		$additional_features = $_POST['additional_features'];
		$feel_about_company = $_POST['feel_about_company'];
		$incorporated = $_POST['incorporated'];
		$need_designed = $_POST['need_designed'];
		$specific_look = $_POST['specific_look'];
		$competition = implode(', ',  $_POST['competition']);
		$websites_link = implode(', ',  $_POST['websites_link']);
		$people_find_business = $_POST['people_find_business'];
		$market_site = $_POST['market_site'];
		$accounts_setup = $_POST['accounts_setup'];
		$links_accounts_setup = $_POST['links_accounts_setup'];
		$service_account = $_POST['service_account'];
		$use_advertising = $_POST['use_advertising'];
		$printed_materials = implode(', ',  $_POST['printed_materials']);
		$domain_name = implode(', ',  $_POST['domain_name']);
		$hosting_account = $_POST['hosting_account'];
		$login_ip = $_POST['login_ip'];
		$domain_like_name = $_POST['domain_like_name'];
		$updating_yourself = $_POST['updating_yourself'];
		$blog_written = $_POST['blog_written'];
		$regular_basis =  $_POST['regular_basis'];
		$additional_information =  $_POST['additional_information'];
		$sign = base64_decode(explode(',', $_POST['sign'])[1]);
		if($sign){
			$tempFile = tempnam(sys_get_temp_dir(), 'png');
			file_put_contents($tempFile, $sign);
		}
	    $message = "Company: $company  <br>
	                Contact: $contact <br>
	                Address : $address  <br>
	                Email: $email<br>
	                City: $city  <br>
	                Phone Numbers: $phone_numbers  <br>
	                Website Address : $website_address <br>
	                Decision Makers : $decision_makers  <br>
	                About Company : $about_company  <br>
	                Purpose : $purpose  <br>
	                Deadline : $deadline  <br>
	                Potential Clients : $potential_clients  <br>
	                Competitor : $competitor  <br>
	                Plan Logo: $plan_logo_string <br>
	                User Perform : $user_perform  <br>
	                Page: 	$page  <br>
	                Content Notes: $content_notes <br>
	                Written Content: $written_content <br>
	                Copywriting Photography Services : $copywriting_photography_services <br>
					Re Design  : $re_design  <br>
	                Working Current Site  : $working_current_site   <br>
	                Working Current Explain : $working_current_explain   <br>
	                Additional Features  : $additional_features   <br>
	                Deadline : $deadline  <br>
	                Feel About Company  : $feel_about_company   <br>
	                Incorporated  : $incorporated   <br>
	                Need Designed : $need_designed  <br>
	                Specific Look  : $specific_look   <br>
	                Competition : 	$competition  <br>
	                Websites Link : $websites_link  <br>
	                People Find Business : $people_find_business  <br>
	                Market Site  : $market_site  <br>
					Accounts Setup : 	$accounts_setup   <br>
	                Links Accounts Setup : $links_accounts_setup  <br>
	                Written Content: $written_content <br>
	                Service Account  : $service_account  <br>
					Use Advertising   : $use_advertising   <br>
	                Printed Materials   : $printed_materials    <br>
	                Domain Name  : $domain_name    <br>
	                Hosting Account  : $hosting_account    <br>
	                Login IP  : $login_ip   <br>
	                Domain Like Name : $domain_like_name    <br>
	                Updating Yourself: $updating_yourself    <br>
	                Blog Written  : $blog_written   <br>
	                Regular Basis  : $regular_basis    <br>
	                Additional Information  : 	$additional_information   
					";
	                
	    $mail = new PHPMailer();
	    $mail->IsSMTP();
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = TRUE;
        $mail->SMTPSecure = "ssl";
        $mail->Port     = 465;  
        $mail->Username = ADMIN_EMAIL_SENDER;
        $mail->Password = ADMIN_APP_PASSWORD;
        $mail->Host = 'smtp.gmail.com';
        $mail->Mailer   = "smtp";
        
        $mail->setFrom(ADMIN_EMAIL, WEBSITE_NAME);
		$mail->addAddress('info@paceonstudio.com', WEBSITE_NAME);
		$mail->addAddress(ADMIN_EMAIL, WEBSITE_NAME);
		$mail->addAddress(ADMIN_EMAIL_SENDER, WEBSITE_NAME);
	    
        $mail->Subject = 'Web Brief Form';
        $mail->AddAttachment($tempFile, 'esignature.png');
        foreach ($_FILES["attachment"]["name"] as $k => $v) {
            $mail->AddAttachment( $_FILES["attachment"]["tmp_name"][$k], $_FILES["attachment"]["name"][$k] );
        }
        
        $mail->isHTML(true);
        $mail->Body = $message;
        
        if(!$mail->Send()) {
            echo json_encode(array('response' => false, 'response_table' => false));
        } else {
            echo json_encode(array('response' => true, 'response_table' => true));
        }
	
	}

    else if($action == 'content_writing')
    {
        $company = $_POST['company'];
		$contact = $_POST['contact'];
	    $address = $_POST['address'];
	    $email = $_POST['email'];
	    $city = $_POST['city'];
	    $phone_numbers = $_POST['phone_numbers'];
        $origin = $_POST['origin_company'];
        $business = $_POST['business_caters'];
        $reason = $_POST['reason'];
        $product = $_POST['product_list'];
        $description = $_POST['short_description'];
        $keywords = $_POST['keywords'];
        $competitors = $_POST['top_competitors'];
        $headers = $_POST['headers'];
        $strength = $_POST['strengths'];
        $customers = $_POST['customers'];
        $company_competitors = $_POST['company_competitors'];
        $mission = $_POST['mission'];
        $slogan = $_POST['slogan'];
        $sign = base64_decode(explode(',', $_POST['sign'])[1]);
		if($sign){
			$tempFile = tempnam(sys_get_temp_dir(), 'png');
			file_put_contents($tempFile, $sign);
		}
        $message = "Company: $company  <br>
	                Contact: $contact <br>
	                Address : $address  <br>
	                Email: $email<br>
	                City: $city  <br>
	                Phone Numbers: $phone_numbers  <br>
	                Future Plans : $origin <br>
	                Industry : $business  <br>
	                Reason : $reason  <br>
	                Product List : $product  <br>
	                Short Description : $description  <br>
	                Keywords : $keywords  <br>
	                Top Competitors : $competitors  <br>
	                Content: $headers <br>
	                Strength : $strength  <br>
	                Product/Services: 	$customers  <br>
	                Company Goal: $company_competitors <br>
	                Mission: $mission <br>
	                Taglines or Slogans : $slogan <br>
					";

        $mail = new PHPMailer();
	    $mail->IsSMTP();
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = TRUE;
        $mail->SMTPSecure = "ssl";
        $mail->Port     = 465;  
        $mail->Username = ADMIN_EMAIL_SENDER;
        $mail->Password = ADMIN_APP_PASSWORD;
        $mail->Host = 'smtp.gmail.com';
        $mail->Mailer   = "smtp";
        
        $mail->setFrom(ADMIN_EMAIL, WEBSITE_NAME);
		$mail->addAddress('info@paceonstudio.com', WEBSITE_NAME);
		$mail->addAddress(ADMIN_EMAIL, WEBSITE_NAME);
		$mail->addAddress(ADMIN_EMAIL_SENDER, WEBSITE_NAME);
	    
        $mail->Subject = 'Content Writing Form';
        $mail->AddAttachment($tempFile, 'esignature.png');
        foreach ($_FILES["attachment"]["name"] as $k => $v) {
            $mail->AddAttachment( $_FILES["attachment"]["tmp_name"][$k], $_FILES["attachment"]["name"][$k] );
        }
        
        $mail->isHTML(true);
        $mail->Body = $message;
        
        if(!$mail->Send()) {
            echo json_encode(array('response' => false, 'response_table' => false));
        } else {
            echo json_encode(array('response' => true, 'response_table' => true));
        }        
    }    
    

	else if($action == 'video_animation')
    {
        $company = $_POST['company'];
		$contact = $_POST['contact'];
	    $address = $_POST['address'];
	    $email = $_POST['email'];
	    $city = $_POST['city'];
	    $phone_numbers = $_POST['phone_numbers'];
		$website = $_POST['website'];
        $decision_maker = $_POST['decision_maker'];
        $business = $_POST['business_name'];
        $industry = $_POST['industry'];
        $target = $_POST['target'];
        $website_address = $_POST['website_address'];
        $style = $_POST['style'];
        $storyboard = $_POST['storyboard'];
        $script = $_POST['script'];
        $voiceover = $_POST['voiceover'];
        $accent = $_POST['accent'];
        $video_type = $_POST['video_type'];
        $main_message = $_POST['main_message'];
        $reasons = $_POST['reasons'];
		$action = $_POST['action'];
		$tone = $_POST['tone'];
		$video_url = $_POST['video_url'];
        $size = $_POST['size'];
		$thoughts = $_POST['thoughts'];
		$similar_video = $_POST['similar_video'];
		$additional_comments = $_POST['additional_comments'];
        $sign = base64_decode(explode(',', $_POST['sign'])[1]);
		if($sign){
			$tempFile = tempnam(sys_get_temp_dir(), 'png');
			file_put_contents($tempFile, $sign);
		}
        $message = "Company: $company  <br>
	                Contact: $contact <br>
	                Address : $address  <br>
	                Email: $email<br>
	                City: $city  <br>
	                Phone Numbers: $phone_numbers  <br>
	                Website : $website <br>
	                Decision Maker : $decision_maker  <br>
	                Business : $business  <br>
	                Industry : $industry  <br>
	                Website Address : $website_address  <br>
	                Style/Theme : $style  <br>
	                Storyboard : $storyboard  <br>
	                Script: $script <br>
	                Voice-Over : $voiceover  <br>
	                Accent: $accent  <br>
	                Video Type: $video_type <br>
	                Message: $main_message <br>
					Reasons: $reasons <br>
					Call To Action: $action <br>
	                Tone : $tone <br>
					Video Placement URL : $video_url <br>
                    Size of the Clip/Video : $size <br>
					Thoughts or Ideas : $thoughts <br>
					Similar Video : $similar_video <br>
					Additional Comments : $additional_comments <br>
					";

        $mail = new PHPMailer();
	    $mail->IsSMTP();
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = TRUE;
        $mail->SMTPSecure = "ssl";
        $mail->Port     = 465;  
        $mail->Username = ADMIN_EMAIL_SENDER;
        $mail->Password = ADMIN_APP_PASSWORD;
        $mail->Host = 'smtp.gmail.com';
        $mail->Mailer   = "smtp";
        
        $mail->setFrom(ADMIN_EMAIL, WEBSITE_NAME);
		$mail->addAddress('info@paceonstudio.com', WEBSITE_NAME);
		$mail->addAddress(ADMIN_EMAIL, WEBSITE_NAME);
		$mail->addAddress(ADMIN_EMAIL_SENDER, WEBSITE_NAME);
	    
        $mail->Subject = 'Video Animation Form';
        $mail->AddAttachment($tempFile, 'esignature.png');
        foreach ($_FILES["attachment"]["name"] as $k => $v) {
            $mail->AddAttachment( $_FILES["attachment"]["tmp_name"][$k], $_FILES["attachment"]["name"][$k] );
        }
        
        $mail->isHTML(true);
        $mail->Body = $message;
        
        if(!$mail->Send()) {
            echo json_encode(array('response' => false, 'response_table' => false));
        } else {
            echo json_encode(array('response' => true, 'response_table' => true));
        }        
    } 

    else if($action == 'app_brief')
    {
        $company = $_POST['company'];
		$contact = $_POST['contact'];
	    $address = $_POST['address'];
	    $email = $_POST['email'];
	    $city = $_POST['city'];
	    $phone_numbers = $_POST['phone_numbers'];
		$website = $_POST['website'];
        $purpose = $_POST['purpose'];
        $goal = $_POST['goal'];
        $audience = $_POST['audience'];
        $what_use = $_POST['what_use'];
        $features = $_POST['features'];
        $language = $_POST['language'];
        $membership = $_POST['membership'];
        $ads = $_POST['ads'];
        $device = $_POST['device'];
        $app_type = $_POST['app_type'];
        $feelings = $_POST['feelings'];
        $logo = $_POST['logo'];
        $color = $_POST['color'];
		$inspiring = $_POST['inspiring'];
		$timeframe = $_POST['timeframe'];
		$visitors = $_POST['visitors'];
        $app_service = implode(', ', $selected_services);
        $sign = base64_decode(explode(',', $_POST['sign'])[1]);
		if($sign){
			$tempFile = tempnam(sys_get_temp_dir(), 'png');
			file_put_contents($tempFile, $sign);
		}
        $message = "Company: $company  <br>
	                Contact: $contact <br>
	                Address : $address  <br>
	                Email: $email<br>
	                City: $city  <br>
	                Phone Numbers: $phone_numbers  <br>
	                Website : $website <br>
	                Purpose : $purpose  <br>
	                Goal : $goal  <br>
	                Audience : $audience  <br>
	                For Internal/External : $what_use  <br>
	                Features/Functionalities : $features  <br>
	                Language : $language  <br>
	                Membership: $membership <br>
	                Ads : $ads  <br>
	                For Which Device: $device  <br>
	                For Android or iOS: $app_type <br>
	                Feelings: $feelings <br>
					Logo: $logo <br>
					Color: $color <br>
	                Inspire Apps : $inspiring <br>
					Timeframe : $timeframe <br>
                    Visitors : $visitors <br>
					App Services : $app_service <br>
					";

        $mail = new PHPMailer();
	    $mail->IsSMTP();
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = TRUE;
        $mail->SMTPSecure = "ssl";
        $mail->Port     = 465;  
        $mail->Username = ADMIN_EMAIL_SENDER;
        $mail->Password = ADMIN_APP_PASSWORD;
        $mail->Host = 'smtp.gmail.com';
        $mail->Mailer   = "smtp";
        
        $mail->setFrom(ADMIN_EMAIL, WEBSITE_NAME);
		$mail->addAddress('info@paceonstudio.com', WEBSITE_NAME);
		$mail->addAddress(ADMIN_EMAIL, WEBSITE_NAME);
		$mail->addAddress(ADMIN_EMAIL_SENDER, WEBSITE_NAME);
	    
        $mail->Subject = 'Mobile Application Form';
        $mail->AddAttachment($tempFile, 'esignature.png');
        foreach ($_FILES["attachment"]["name"] as $k => $v) {
            $mail->AddAttachment( $_FILES["attachment"]["tmp_name"][$k], $_FILES["attachment"]["name"][$k] );
        }
        
        $mail->isHTML(true);
        $mail->Body = $message;
        
        if(!$mail->Send()) {
            echo json_encode(array('response' => false, 'response_table' => false));
        } else {
            echo json_encode(array('response' => true, 'response_table' => true));
        }        
    } 
    
    
    else if($action == 'logo_brief'){
	
	    $company = $_POST['company'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $city = $_POST['city'];
        $phone = $_POST['phone_numbers'];
        $logo_name = $_POST['logo_name'];
        $slogan = $_POST['slogan'];
        $business = $_POST['business'];
        $logo_color = $_POST['logo_color'];
        $logo_categories = implode(', ',  $_POST['logo_categories']);
        $icon_based = implode(', ',  $_POST['icon_based']);
        $color_req = $_POST['color_req'];
        $font_style = implode(', ', $_POST['font_style']);
        $info = $_POST['info'];

        $sign = base64_decode(explode(',', $_POST['sign'])[1]);
		if($sign){
			$tempFile = tempnam(sys_get_temp_dir(), 'png');
			file_put_contents($tempFile, $sign);
		}
	

	    $message = "Company: $company <br>
                    Contact: $contact <br>
                    Address: $address <br>
	                Email: $email <br>
	                City: $city <br>
	                Phone Number: $phone <br>
	                Logo Name: $logo_name <br>
	                Slogan/Tagline: $slogan <br>
	                Business: $business <br>
	                Logo Color: $logo_color <br>
	                Logo Categories: $logo_categories <br>
	                Icon Based Logo: $icon_based <br>
	                Color Requirements: $color_req <br>
	                Font Style: $font_style <br>
					  Additional Information: $additional_information";
	                
	    $mail = new PHPMailer();
	    $mail->IsSMTP();
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = TRUE;
        $mail->SMTPSecure = "ssl";
        $mail->Port     = 465;  
        $mail->Username = ADMIN_EMAIL_SENDER;
        $mail->Password = ADMIN_APP_PASSWORD;
        $mail->Host = 'smtp.gmail.com';
        $mail->Mailer   = "smtp";
        
        $mail->setFrom(ADMIN_EMAIL, WEBSITE_NAME);
		$mail->addAddress('info@paceonstudio.com', WEBSITE_NAME);
		$mail->addAddress(ADMIN_EMAIL, WEBSITE_NAME);
		$mail->addAddress(ADMIN_EMAIL_SENDER, WEBSITE_NAME);
	    
        $mail->Subject = 'Logo Brief Form';
         $mail->AddAttachment($tempFile, 'esignature.png');
        foreach ($_FILES["attachment"]["name"] as $k => $v) {
            $mail->AddAttachment( $_FILES["attachment"]["tmp_name"][$k], $_FILES["attachment"]["name"][$k] );
        }
        
        $mail->isHTML(true);
        $mail->Body = $message;
        
        if(!$mail->Send()) {
            echo json_encode(array('response' => false, 'response_table' => false));
        } else {
            echo json_encode(array('response' => true, 'response_table' => true));
        }
	}else{
	    
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
		$optional = json_encode($optional);
		$rows = "<tr><td class='label'>First Name:</td><td class='value'>{$f_name}</td></tr>";

		if (!empty($l_name)) {
			$rows .= "<tr><td class='label'>Last Name:</td><td class='value'>{$l_name}</td></tr>";
		}

		$rows .= "
		<tr><td class='label'>Email:</td><td class='value'>{$email}</td></tr>
		<tr><td class='label'>Number:</td><td class='value'>{$number}</td></tr>
		<tr><td class='label'>URL:</td><td class='value'>{$url}</td></tr>
		<tr><td class='label'>Domain:</td><td class='value'>{$domain}</td></tr>
		<tr><td class='label'>Service:</td><td class='value'>{$services}</td></tr>
		<tr><td class='label'>Message:</td><td class='value'>{$param_message}</td></tr>
		<tr><td class='label'>Optional:</td><td class='value'>{$optional}</td></tr>";

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
			Message: $param_message
			Optional: $optional";

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