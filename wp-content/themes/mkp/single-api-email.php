<?php
/**
 * API: Contact
 *
 * @package MKP
 * @since 0.1.0
 */

if ($_POST) {

$email_address = wpx::get_option_meta('theme_options', 'email_address');

// setup response
$response = array();

// add in received fields
$response['fields'] = $_POST;

$required = array(
	'real_name', 
	'email',
	'subject',
	'message'
);

$has_error = false;

$fields = array();

if ($_POST) {
	foreach ($_POST as $key => $value) {
		if (in_array($key, $required) && !$value) {
			$has_error = true;
			$response['message'] .= 'The field <strong>"'.$key.'"</strong> was not filled out and is required.<br>';
		}
		$fields[$key] = $value;
	}
} else {
	$has_error = true;
	$response['message'] = 'Error: No data received from the form.';
}

if ($has_error) {
	$response['state'] = 'error';
} else {
	// proceed
	$email_from_name = $response['fields']['real_name'];
	$email_from = $response['fields']['email'];
	$email_to = $email_address;
	$reply = $response['fields']['email'];
	$email_subject = "[MKP Team] You have a new inquiry.";

	$email_message = '';

	$email_message .= "MKP Team has a new message.\n\n";
	$email_message .= "--------------------------------\n\n";

	$email_message .= "From: ".$response['fields']['real_name']."\n\n";
	$email_message .= "Organization: ".$response['fields']['organization']."\n\n";
	$email_message .= "Subject: ".$response['fields']['subject']."\n\n";
	$email_message .= "Email: ".$response['fields']['email']."\n\n";
	$email_message .= $response['fields']['message']."\n\n";

	$headers = "MIME-Version: 1.0\r\n";
	$headers.= "From: ".$response['fields']['real_name']." <".$email_from.">\r\n";
	$headers.= "Content-Type: text/plain;charset=utf-8\r\n";
	$headers.= "Reply-To: $reply\r\n";  
	$headers.= "X-Mailer: PHP/" . phpversion();

	$delivery = mail($email_to, $email_subject, $email_message, $headers);

	if ($delivery) {
		$result['state'] = 'success';
	} else {
		$result['state'] = 'error';
	}

	if ($result['state'] == 'success') {
		$response['state'] = 'success';
		$response['message'] = "Sent! If you don't hear from us in a few days, email <a href='mailto:".$email_address."'>".$email_address."</a>.";
	} elseif ($result['state'] == 'error') {
		$response['state'] = 'error';
		$response['message'] = 'There was a problem sending the email. Please email <a href="mailto:'.$email_address.'">'.$email_address.'</a>.';
	}
}

// output response as json
header('Content-type: application/json');
echo(json_encode($response));

} else {
	// do nothing
}

?>
