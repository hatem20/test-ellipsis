<?php

$phpmailer = new PHPMailer();
$phpmailer->isSMTP();
$phpmailer->Host = 'sandbox.smtp.mailtrap.io';
$phpmailer->SMTPAuth = true;
$phpmailer->Port = 2525;
$phpmailer->Username = getenv('MAIL_USERNAME');
$phpmailer->Password = '****7eea';


$new_variable = "xyz";