<?php

declare(strict_types=1);

require_once(__DIR__ . '/../vendor/autoload.php');

use Profile\{Helpers, Config};
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$config = Config::init();

header('Content-Type: application/json; charset=utf-8');

session_start();

$is_production = $config->getIsProduction();

if (!$is_production) {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
    $dotenv->load();
}

$csrf_token = $_POST['csrf_token'] ?? null;
$subject = $_POST['subject'] ?? null;
$language = $_POST['language'] ?? 'es';
$name = $_POST['name'] ?? null;
$phone = $_POST['phone'] ?? null;
$email = $_POST['email'] ?? null;
$body = $_POST['body'] ?? null;
$gmail_pass = $_ENV['GMAIL_PASS'] ?? null;

$message_translations = [
    "en" => [
        "empty" => "Empty fields",
        "csrf" => "CSRF token not valid",
        "language" => "Invalid language",
        "email" => "Invalid email",
        "phone" => "Invalid phone",
        "mail" => "Error sending email",
        "success" => "Thank you for your message! I will contact you as soon as possible.",
        "error__name" => "Invalid name, please enter a valid name",
        "error__phone" => "Invalid phone, please enter a valid phone number",
        "error__email" => "Invalid email, please enter a valid email address",
        "error__body" => "Invalid message, please enter a valid message"
    ],
    "es" => [
        "empty" => "Campos vacíos",
        "csrf" => "Token CSRF no válido",
        "language" => "Idioma inválido",
        "email" => "Correo inválido",
        "phone" => "Teléfono inválido",
        "mail" => "Error al enviar el correo",
        "success" => "¡Gracias por tu mensaje! Me pondré en contacto contigo lo antes posible.",
        "error__name" => "Nombre inválido, por favor ingrese un nombre válido",
        "error__phone" => "Teléfono inválido, por favor ingrese un número de teléfono válido",
        "error__email" => "Correo inválido, por favor ingrese un correo electrónico válido",
        "error__body" => "Mensaje inválido, por favor ingrese un mensaje válido"
    ]
];

$message = $message_translations[Helpers::sanitize_lang($language)];
$errors = [
    "name" => '',
    "phone" => '',
    "email" => '',
    "body" => ''
];

if (!hash_equals($_SESSION['csrf_token'], $csrf_token)) {
    echo json_encode([
        'success' => false,
        'error' => 'csrf',
        'message' => $message['csrf'],
        'lang' => $language,
        'errors' => $errors,
        'exception' => ''
    ]);
    exit;
}

if (empty($gmail_pass)) {
    echo json_encode([
        'success' => false,
        'error' => 'mail',
        'message' => $message['mail'],
        'lang' => $language,
        'errors' => $errors,
        'exception' => ''
    ]);
    exit;
}

if (empty($csrf_token) || empty($subject) || empty($language) || empty($name) || empty($phone) || empty($email) || empty($body)) {
    if (empty($name)) {
        $errors['name'] = $message['error__name'];
    }
    if (empty($phone)) {
        $errors['phone'] = $message['error__phone'];
    }
    if (empty($email)) {
        $errors['email'] = $message['error__email'];
    }
    if (empty($body)) {
        $errors['body'] = $message['error__body'];
    }
    echo json_encode([
        'success' => false,
        'error' => 'empty',
        'message' => $message['empty'],
        'lang' => $language,
        'errors' => $errors,
        'exception' => ''
    ]);
    exit;
}


if (!in_array($language, ['en', 'es'])) {
    echo json_encode([
        'success' => false,
        'error' => 'language',
        'message' => $message['language'],
        'lang' => $language,
        'errors' => $errors,
        'exception' => ''
    ]);
    exit;
}

if (!preg_match('/^[0-9]{10}+$/', $phone)) {
    $errors['phone'] = $message['error__phone'];
    echo json_encode([
        'success' => false,
        'error' => 'phone',
        'message' => $message['phone'],
        'lang' => $language,
        'errors' => $errors,
        'exception' => ''
    ]);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = $message['error__email'];
    echo json_encode([
        'success' => false,
        'error' => 'email',
        'message' => $message['email'],
        'lang' => $language,
        'errors' => $errors,
        'exception' => ''
    ]);
    exit;
}

$to = 'lgzarturo@gmail.com';

$html_content = '
<html>
    <head>
        <title>{{ subject }} - {{ email }}</title>
    </head>
    <body style="padding: 20px; font-size: 16px; font-family: Arial, sans-serif;">
        <h1 style="border-bottom: 1px solid #ccc; margin-bottom: 20px;">
            Subject: <span style="font-weight: 400;">{{ subject }}</span>
        </h1>
        <br>
        <ul style="margin-bottom: 30px; list-style: none; padding: 0;">
            <li><strong>Name</strong>: {{ name }}</li>
            <li><strong>Phone</strong>: {{ phone }}</li>
            <li><strong>Email</strong>: {{ email }}</li>
        </ul>
        <br>
        <h2 style="border-bottom: 1px solid #ccc; margin-bottom: 20px;">Message</h2>
        <p style="margin: 30px 0; font-size: 125%;">{{ body }}</p>
        <br>
        <p style="font-size: 80%; color: #ccc; padding: 20px 0; margin-top: 20px; border-top: 1px solid #ccc;">
            Message sent on <strong>{{ date }}</strong>
        </p>
    </body>
</html>
';

// Replace placeholders with actual values
$html_content = str_replace(
    array(
        '{{ subject }}',
        '{{ name }}',
        '{{ phone }}',
        '{{ email }}',
        '{{ body }}',
        '{{ date }}'
    ),
    array(
        $subject,
        $name,
        $phone,
        $email,
        $body,
        date("Y-m-d H:i:s")
    ),
    $html_content
);

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . PHP_EOL;
$headers .= "Content-type:text/html;charset=UTF-8" . PHP_EOL;
$headers .= "X-Mailer: PHP/" . phpversion() . PHP_EOL;

// More headers
$headers .= "From: $name <$email>" . PHP_EOL;
$headers .= "Reply-To: $name <$email>" . PHP_EOL;
$headers .= "Cc: $name <$email>" . PHP_EOL;

try {
    $mail = new PHPMailer(true);
    $mail->IsSMTP();
    $mail->Mailer = "smtp";
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port = 587;
    $mail->Host = "smtp.gmail.com";
    $mail->Username = "lgzarturo@gmail.com";
    $mail->Password = $gmail_pass;
    $mail->IsHTML(true);
    $mail->AddAddress($email, $name);
    $mail->SetFrom($email, $name);
    $mail->AddReplyTo($email, $name);
    $mail->Subject = $subject;

    $mail->MsgHTML($html_content);
    if (!$mail->Send()) {
        throw new Exception('Error sending email');
    }
} catch (Exception $e) {
    echo json_encode([
        'success' => false,
        'error' => 'mail',
        'message' => $mail['mail'],
        'lang' => $language,
        'errors' => $errors,
        'exception' => $e->getMessage()
    ]);
    exit;
}

echo json_encode([
    'success' => true,
    'error' => '',
    'message' => $message['success'],
    'lang' => $language,
    'errors' => $errors,
    'exception' => ''
]);
exit;
