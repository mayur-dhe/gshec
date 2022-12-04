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
    echo $previous = "javascript:history.go(-1)";
    if(isset($_SERVER['HTTP_REFERER'])) {
      $previous = $_SERVER['HTTP_REFERER'];
    }
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
  $send_to = "mayurnaik273@gmail.com";

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
                  <body style="margin:0;padding:0;">
                      <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
                          <tr>
                              <td align="center" style="padding:0;">
                                  <table role="presentation" style="width:60%;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
                                      <tr>
                                          <td style="padding:0 20px;background:#606060;">
                                              <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;font-size:9px;font-family:Arial,sans-serif;">
                                                  <tr>
                                                      <td style="padding:0;width:50%;" align="left">
                                                          <img src="assets/images/logo/GSHEC.png" alt="GSHEC" style="width: 70px;">
                                                      </td>
                                                      <td style="padding:0;width:50%;" align="right">
                                                          <p style="font-size:14px;line-height:20px;font-family:Arial,sans-serif; color: white;">
                                                              SCERT, Alto-Porvorim, <br>Bardez-Goa
                                                          </p>
                                                      </td>
                                                  </tr>
                                              </table>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td style="padding:20px">
                                              <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                                                  <tr>
                                                      <td style="padding:0;">
                                                          <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                                                              <tr>
                                                                  <td style="width:30%;color:#153643;">Name : </td>
                                                                  <td style="width:70%;color:#153643;">'.$name.'</td>
                                                              </tr>
                                                              <tr>
                                                                  <td style="width:30%;color:#153643;">Phone : </td>
                                                                  <td style="width:70%;color:#153643;">'.$mobile.'</td>
                                                              </tr>
                                                              <tr>
                                                                <td style="width:30%;color:#153643;">Subject : </td>
                                                                <td style="width:70%;color:#153643;">'.$subject.'</td>
                                                            </tr>
                                                              <tr>
                                                                  <td style="width:30%;color:#153643;">Message : </td>
                                                                  <td style="width:70%;color:#153643;">'.$message.'</td>
                                                              </tr>
                                                          </table>
                                                      </td>
                                                  </tr>
                                              </table>
                                          </td>
                                      </tr>
                                  </table>
                              </td>
                          </tr>
                      </table>
                  </body>
                </html>';

  mail($send_to, $subject, $htmlBody, $headers);
}
?>