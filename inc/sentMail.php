<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader (created by composer, not included with PHPMailer)
require '../vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);


// var_dump($_POST['formdata']);
// exit;


if($_POST['sendmail']){

    $name = isset($_POST['fullname']) ? $_POST['fullname'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $nationality = isset($_POST['nationality']) ? $_POST['nationality'] : '';
    $message = $_POST['formdata'];


    // Collect Q&A data and build HTML for body
    $qna = isset($_POST['formdata']) ? $_POST['formdata'] : [];
    $qnaRows = '';
    if (!empty($qna) && is_array($qna)) {
        $qnaRows .= '<table border="1" cellpadding="6" cellspacing="0" style="border-collapse:collapse;margin-top:20px;">';
        $qnaRows .= '<tr><th style="background:#f7f7f7;">Question</th><th style="background:#f7f7f7;">Answer</th></tr>';
        foreach ($qna as $item) {
            $question = isset($item['q']) ? htmlspecialchars($item['q']) : '';
            $answer = isset($item['a']) ? htmlspecialchars($item['a']) : '';
            $qnaRows .= '<tr><td>' . $question . '</td><td>' . $answer . '</td></tr>';
        }
        $qnaRows .= '</table>';
    }




    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'mail-eu.smtp2go.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'info@upzone.ae';                     //SMTP username
        $mail->Password   = '64qj2M2HK2Kqg8jn';                               //SMTP password
        // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('info@upzone.ae', 'UpZone');
        $mail->addAddress('info@brandvick.com', 'Brandvick');     //Add a recipient
        $mail->addAddress('info@upzone.ae','Upzone');               //Name is optional
        $mail->addReplyTo($email, $name);
        // $mail->addCC('cc@example.com');
        $mail->addBCC('muzammil.techibits@gmail.com');
    
        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
        //Content
        $mail->isHTML(true);
        $mail->CharSet  = 'UTF-8';
        $mail->Encoding = 'base64';
        $mail->Subject = '🏆 New Golden Visa Assessment - '.$name;
        $mail->Body    = '<p>Name: '.$name.'</p><p>Email: '.$email.'</p><p>Phone: '.$phone.'</p><p>Nationality: '.$nationality.'</p>'.$qnaRows;
        $mail->AltBody = 'Name: '.$name."\nEmail: ".$email."\nPhone: ".$phone."\nNationality: ".$nationality;

    
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

}