<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$message = '';
$alertType = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Capture form data
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $body = $_POST['body'];
    $altbody = $_POST['altbody'];

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;          // Enable SMTP authentication
        $mail->Username = 'mranantsoni@gmail.com';   // SMTP username
        $mail->Password = 'wgjxuvlsxdkaeard';        // SMTP password
        $mail->SMTPSecure = 'tls';      // Enable TLS encryption
        $mail->Port = 587;              // TCP port to connect to

        //Recipients
        $mail->setFrom('mranantsoni7@gmail.com', 'Anant Soni');
        $mail->addAddress($email);     // Add a recipient using form input

        //Content
        $mail->isHTML(true);            // Set email format to HTML
        $mail->Subject = $subject;      // Use form input for subject
        $mail->Body    = $body;         // Use form input for body
        $mail->AltBody = $altbody;      // Use form input for altbody

        $mail->send();
        $message = 'Email has been sent';
        $alertType = 'success';
    } catch (Exception $e) {
        $message = 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
        $alertType = 'danger';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Email</title>
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
        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }
        .form-header {
            text-align: center;
            margin-bottom: 20px;
            color: #007bff;
        }
        .form-label {
            color: #495057;
        }
        .form-control {
            border-radius: 5px;
        }
        .btn-custom {
            background-color: #007bff;
            border-color: #007bff;
            color: white;
            width: 100%;
            border-radius: 5px;
            padding: 10px;
            font-size: 16px;
            font-weight: bold;
        }
        .btn-custom:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2 class="form-header">Send an Email</h2>
        <?php if (!empty($message)): ?>
            <div class="alert alert-<?php echo $alertType; ?> alert-dismissible fade show" role="alert">
                <?php echo $message; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <form action="" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Recipient Email:</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Enter recipient's email" required>
            </div>

            <div class="mb-3">
                <label for="subject" class="form-label">Subject:</label>
                <input type="text" id="subject" name="subject" class="form-control" placeholder="Enter email subject" required>
            </div>

            <div class="mb-3">
                <label for="body" class="form-label">Email Body:</label>
                <textarea id="body" name="body" class="form-control" rows="5" placeholder="Enter email body" required></textarea>
            </div>

            <div class="mb-3">
                <label for="altbody" class="form-label">Alt Body (Plain Text):</label>
                <textarea id="altbody" name="altbody" class="form-control" rows="5" placeholder="Enter plain text version"></textarea>
            </div>

            <button type="submit" class="btn btn-custom">Send Email</button>
        </form>
    </div>

    <!-- Bootstrap JS (Optional for interactive components like modals) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
