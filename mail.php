<?php
$field_name = $_POST['name'];
$field_phone = $_POST['phone'];
$field_email = $_POST['email'];
$field_massage = $_POST['massage'];

$mail_to = 'asterjohn33@gmail.com';
$subject = 'Client/Visitor form submition'.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'phone: '.$field_phone."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. We will contact you shortly.');
		window.location = 'contact.php';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to gordon@template-help.com');
		window.location = 'contact.php';
	</script>
<?php
}
?>
