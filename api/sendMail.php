<?php
$name = $email = $message = $subject = $mobile = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $mobile = test_input($_POST["mobile"]);
  $subject = test_input($_POST["subject"]);
  $message = test_input($_POST["message"]);

  $response = sendMail($email,$name,$mobile,$subject,$message);
  
  if ($response) {
    header("Location: https://gshec.craftitt.com/index#contact"); 
    exit();
  }
} else {
  echo "<h1>Error</h1>";
}
return true;



function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function sendMail($email,$name,$mobile,$subject,$message){
  $send_to = "dev.dhegoa@gmail.com";

  ini_set( 'display_errors', 1 );
  error_reporting( E_ALL );

  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers .= 'From: '.$email.'<'.$email.'>' . "\r\n".'Reply-To: '.$email."\r\n" . 'X-Mailer: PHP/' . phpversion();
  $htmlBody = '';
  $htmlBody .= '<!DOCTYPE html>
                <html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width,initial-scale=1">
                    <meta name="x-apple-disable-message-reformatting">
                    <title></title>
                    <!--[if mso]>
                    <noscript>
                    <xml>
                        <o:OfficeDocumentSettings>
                        <o:PixelsPerInch>96</o:PixelsPerInch>
                        </o:OfficeDocumentSettings>
                    </xml>
                    </noscript>
                    <![endif]-->
                    <style>
                        table, td, div, h1, p {font-family: Arial, sans-serif;}
                    </style>
                </head>
                <body >
                    <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
                        <tr>
                            <td style="padding:10px;width:50%;" align="left">
                                <img src="https://gshec.craftitt.com/assets/images/logo/GSHEC.png" alt="GSHEC" style="width: 70px;">
                            </td>
                            <td style="padding:10px;width:50%;" align="right">
                                <p style="font-size:14px;line-height:20px;font-family:Arial,sans-serif; color: 153643;">
                                    SCERT, Alto-Porvorim, <br>Bardez-Goa
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding:10px; width:30%;color:#153643;">Name : </td>
                            <td style="padding:10px; width:70%;color:#153643;">'.$name.'</td>
                        </tr>
                        <tr>
                            <td style="padding:10px; width:30%;color:#153643;">Phone : </td>
                            <td style="padding:10px; width:70%;color:#153643;">'.$mobile.'</td>
                        </tr>
                        <tr>
                            <td style="padding:10px; width:30%;color:#153643;">Subject : </td>
                            <td style="padding:10px; width:70%;color:#153643;">'.$subject.'</td>
                        </tr>
                        <tr>
                            <td style="padding:10px; width:30%;color:#153643;">Message : </td>
                            <td style="padding:10px; width:70%;color:#153643;">'.$message.'</td>
                        </tr>
                </table>
                </body>
                </html>';

  if (mail($send_to, $subject, $htmlBody, $headers)) {
      return true;
  } else {
      return false;
  }
  
}
?>