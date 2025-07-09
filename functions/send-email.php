<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";
require_once "config.php";

$data = [
    'statusCode' => 400,
    'message' => 'Not Reached'
];


if (isset($_POST['action']) && $_POST['action'] == 'new-signup') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $nickname = $_POST['nickname'];
    $country = $_POST['country'];
    $time = time();

    $message = '';

    $message .= 'Name: ' . $name . '<br>';
    $message .= 'Email: ' . $email . '<br>';
    $message .= 'Nickname: ' . $nickname . '<br>';
    $message .= 'Country: ' . $country;

    $subject = 'New Signup - Ethereal';

    $name = 'Ethereal';
    $emailer = 'support@crrt.site';

    $mail = new PHPMailer();

    $mail->isSMTP();
    // $mail->SMTPDebug = 1;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Host = $host;
    $mail->Port = '465';
    $mail->Username = $username;
    $mail->Password = $password;

    // EMail Settings
    $mail->isHTML(true);
    $mail->setFrom($emailer, $name);
    $mail->addAddress($owner);
    $mail->Subject = $subject;
    $mail->Body = $message;

    if ($mail->send()) {
        $data = [
            'statusCode' => 200,
            'message' => 'Email Sent'
        ];
    } else {
        $data = [
            'statusCode' => 400,
            'message' => 'Failed to send email'
        ];
    }
} else {
    $data = [
        'statusCode' => 400,
        'message' => 'Invalid Request'
    ];
}

echo json_encode($data);
