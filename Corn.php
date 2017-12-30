<?php
include 'App/init.php';
$db = new Database();

//Mail Configaration
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


//Database Query
$data = $db->select('subscriber_list');
$today = date_Create(Date('Y-m-d'));


  foreach($data as $row){
  // echo "<pre>";
  // print_r(date_diff($today,date_create($row['fromDate']))->format('%R%a'));
  // echo "<br>";
    //

    if( 0 < date_diff($today,date_create($row['fromDate']))->format('%R%a') &&
        date_diff($today,date_create($row['fromDate']))->format('%R%a') <= 13
      ){
        $days = date_diff($today,date_create($row['fromDate']))->format('%a Days');

        $text = <<<EOT
        <p>Dear {$row['name']},</p>
        <p>your subscripbs will expire within $days . Please renew before this {$row['fromDate']} date. Thank You.</p>
        <br>
        <br>
        Best Regards,<br>
        Subscription Software<br>
        Email: alamtechsolutions@gmail.com
        <p>Any feedback is welcome </p>
EOT;


        //SMTP
        $mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'user@example.com';                 // SMTP username
        $mail->Password = 'secret';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;
        
        //Email Create With last date condition
        $mail = new PHPMailer;
        //Set who the message is to be sent from
        $mail->setFrom('webdesigner@techsolutionsbd.com', 'First Last');
        //Set an alternative reply-to address
        $mail->addReplyTo('webdesigner@techsolutionsbd.com', 'First Last');
        //$mail->addCC('cc@example.com');
        $mail->addBCC('alamtechsolutions@gmail.com');
        //Set who the message is to be sent to
        $mail->addAddress($row['email'],$row['name']);
        //Set the subject line
        $mail->Subject = 'Subscription Software';
        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body
        $mail->msgHTML($text);
        //Replace the plain text body with one created manually
        //$mail->AltBody = 'This is a plain-text message body';
        //Attach an image file
        //$mail->addAttachment('images/phpmailer_mini.png');
        //send the message, check for errors
        //print_r( $mail);
        if (!$mail->send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            echo "Message sent!";
        }

    }


    /usr/bin/php -q /home/melabd/subscriber.emelabd.net/Corn.php	 Edit


  };
