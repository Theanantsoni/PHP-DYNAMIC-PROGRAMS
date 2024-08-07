<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../../../../../phpMyAdmin/vendor/autoload.php'; // Path to PHPMailer autoload file phpMyAdmin\vendor

    include 'Admin/connection.php';
    session_start();

    if (isset($_POST['btnsubmit'])) {
        $email = $_POST['txtemail'];

        if (empty($email)) {
            echo "Email is required.";
            exit();
        }

        // Check if email exists in the database
        $query = "SELECT * FROM register WHERE u_email = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Email exists, generate OTP and send email
            $otp = rand(100000, 999999);
            $expiry = time() + 300; // OTP expires in 5 minutes

            // Save OTP and expiry in the session
            $_SESSION['otp'] = $otp;
            $_SESSION['otp_expiry'] = $expiry;
            $_SESSION['otp_email'] = $email;

            // Send OTP to email using PHPMailer
            $mail = new PHPMailer(true); // Create a new PHPMailer instance

            try {
                //Server settings
                $mail->isSMTP(); // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
                $mail->SMTPAuth = true; // Enable SMTP authentication
                $mail->Username = 'makrubiyajaynish7500@gmail.com'; // SMTP username
                $mail->Password = 'ypjdxlyfhfkahvex'; // SMTP password
                $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587; // TCP port to connect to

                //Recipients
                $mail->setFrom('mranantsoni7@gmail.com', 'Anant Soni');
                $mail->addAddress($email); // Add a recipient

                //Content
                $mail->isHTML(true); // Set email format to HTML
                $mail->Subject = 'Your OTP Code';
                $mail->Body    = "Your OTP code is $otp. It will expire in 5 minutes.";

                $mail->send();
                echo "OTP sent to your email.";
                header("Location: verify_otp.php");
                exit();
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        } else {
            echo "No account found with that email.";
        }

        $stmt->close();
        $conn->close();
    }
?>
