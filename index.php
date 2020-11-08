<?php
require_once 'vendor/autoload.php';
 
use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(__DIR__. '/.env');


$mail = new Nette\Mail\Message;
$mail->setFrom('Pokus NetteMail <tvojebabicka696969@seznam.cz>')
    ->addTo('matyas.babiak5@gmail.com')
    ->setSubject('První zpráva přes SMT z Nette Maileru')
    ->setBody("Dobrý den, \n toto je testovací zpráva");
 
    $mailer = new Nette\Mail\SmtpMailer([
    'host' => $_ENV['EMAIL_HOST'],
    'port' => $_ENV['EMAIL_PORT'],
    'username' => $_ENV['EMAIL_USERNAME'],
    'password' => $_ENV['EMAIL_PASSWORD'],
    'secure' => $_ENV['EMAIL_SECURE'],
]);
$result = $mailer->send($mail);

var_dump($result);
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>


