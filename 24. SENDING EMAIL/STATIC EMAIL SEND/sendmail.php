<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

$message = '';
$alertType = '';

$email = 'ABC@gmail.com';
$subject = 'Test Email from PHP';
$body = 'Hello, this is a test email sent from a PHP script!';
$altbody = 'Hello, this is a test email sent from a PHP script in plain text!';

try {
    //Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;          // Enable SMTP authentication
    $mail->Username = 'ABC@gmail.com';   // SMTP username
    $mail->Password = '';   // SMTP password
    $mail->SMTPSecure = 'tls';      // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;              // TCP port to connect to

    //Recipients
    $mail->setFrom('ABC@gmail.com', 'Anant Soni');
    $mail->addAddress($email, 'Soni anant r');     // Add a recipient

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $body;
    $mail->AltBody = $altbody;

    $mail->send();
    $message = 'Email has been sent';
    $alertType = 'success';
} catch (Exception $e) {
    $message = 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
    $alertType = 'danger';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Status</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 100%;
        }
        .email-details {
            background-color: #f1f1f1;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
        }
        .email-header {
            font-size: 24px;
            color: #007bff;
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php if (!empty($message)): ?>
            <div class="alert alert-<?php echo $alertType; ?> alert-dismissible fade show" role="alert">
                <?php echo $message; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <h1 class="email-header">Email Details</h1>

            <?php if ($alertType === 'success'): ?>
                <div class="email-details">
                    <div class="row mb-2">
                        <label class="col-sm-2 col-form-label"><strong>Email:</strong></label>
                        <div class="col-sm-10">
                            <p class="form-control-plaintext"><?php echo htmlspecialchars($email); ?></p>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-sm-2 col-form-label"><strong>Subject:</strong></label>
                        <div class="col-sm-10">
                            <p class="form-control-plaintext"><?php echo htmlspecialchars($subject); ?></p>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-sm-2 col-form-label"><strong>Body:</strong></label>
                        <div class="col-sm-10">
                            <p class="form-control-plaintext"><?php echo htmlspecialchars($body); ?></p>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-sm-2 col-form-label"><strong>Alt Body:</strong></label>
                        <div class="col-sm-10">
                            <p class="form-control-plaintext"><?php echo htmlspecialchars($altbody); ?></p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>

    <!-- Bootstrap JS (for alerts) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
