<?php
include_once __DIR__ . '/../src/config.php';
include_once __DIR__ . '/../src/conn.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
require '../PHPMailer/src/Exception.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo 'Invalid request.';
    exit;
}

$name = htmlspecialchars(trim($_POST['client_name'] ?? ''), ENT_QUOTES, 'UTF-8');
$mobile = htmlspecialchars(trim($_POST['client_mobile'] ?? ''), ENT_QUOTES, 'UTF-8');
$email = filter_var(trim($_POST['client_email'] ?? ''), FILTER_SANITIZE_EMAIL);
$address = htmlspecialchars(trim($_POST['client_address'] ?? ''), ENT_QUOTES, 'UTF-8');
$plantype = htmlspecialchars(trim($_POST['client_plantype'] ?? ''), ENT_QUOTES, 'UTF-8');
$websitetype = htmlspecialchars(trim($_POST['client_websitetype'] ?? ''), ENT_QUOTES, 'UTF-8');

$errors = [];

if (empty($name) || !preg_match('/^[a-zA-Z\s]+$/', $name)) {
    $errors[] = 'Please enter a valid name.';
}

if (empty($mobile) || !preg_match('/^[0-9]{10}$/', $mobile)) {
    $errors[] = 'Please enter a valid 10-digit mobile number.';
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Please enter a valid email address.';
}

if (empty($address)) {
    $errors[] = 'Address is required.';
}

if (empty($websitetype)) {
    $errors[] = 'Please select website type.';
}

if (empty($plantype)) {
    $errors[] = 'Please select a plan type.';
}

if (!empty($errors)) {
    echo implode('<br>', $errors);
    exit;
}

$stmt = $conn->prepare('INSERT INTO web_client (Name, Mobile, Email, Address, Choice, Plan) VALUES (?, ?, ?, ?, ?, ?)');

if (!$stmt) {
    echo 'Database prepare failed.';
    exit;
}

$stmt->bind_param('ssssss', $name, $mobile, $email, $address, $websitetype, $plantype);

if (!$stmt->execute()) {
    echo 'Failed to save your details. Please try again.';
    $stmt->close();
    exit;
}

$subject = 'Web Development | CampusXchange';
$message = "
<body style='margin:0;padding:2px;background-color:#f4f4f4;font-family:Arial,sans-serif;line-height:1.5;color:#333;'>
  <div style='max-width:800px;margin:auto;padding:15px;box-shadow:0 2px 10px rgba(0,0,0,0.1);background-color:#fff;'>
    <img src='https://campusxchange.wuaze.com/assets/Images/campusxchange-email-header.jpg' alt='CampusXchange email banner' style='width:100%;display:block;'>

    <ol style='list-style:none;padding:0;margin:15px 0;'>
      <li><strong>Name:</strong> {$name}</li>
      <li><strong>Email:</strong> {$email}</li>
      <li><strong>Mobile:</strong> {$mobile}</li>
      <li><strong>Address:</strong> {$address}</li>
      <li><strong>Website Type:</strong> {$websitetype}</li>
      <li><strong>Plan:</strong> {$plantype}</li>
    </ol>

    <h1 style='color:#fff;padding:40px 10px;background:linear-gradient(to right,#6366f1,#f43f5e);text-align:center;font-size:1.6rem;margin:0;'>
      You're Looking for a Website
    </h1>

    <div style='background-color:#ecf0f1;padding:20px;margin-top:20px;'>
      <p style='margin:0 0 10px;'>Thanks for reaching out to <strong>CampusXchange</strong>.</p>
      <p style='margin:0 0 10px;'>Our support team will contact you within 24 hours.</p>
      <p style='margin:0;'>Please also check your spam or junk folder if needed.</p>
    </div>

    <footer style='margin-top:25px;text-align:center;font-size:0.85rem;color:#777;background-color:#fafafa;padding:15px;'>
      <p style='margin:8px 0;'>© CampusXchange. All rights reserved.</p>
    </footer>
  </div>
</body>
";

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'campusxchangeservices@gmail.com';
    $mail->Password = $app;
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('campusxchangeservices@gmail.com', 'Support CampusXchange');
    $mail->addAddress($email);

    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Encoding = 'base64';
    $mail->Subject = $subject;
    $mail->Body = $message;
    $mail->send();

    echo '✅ Thank you! Your details have been submitted successfully. Please check your email inbox.';
} catch (Exception $e) {
    echo '✅ Details saved successfully, but email could not be sent right now.';
}

$stmt->close();
exit;
?>