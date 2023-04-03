<?php
require '../config/connect.php';
$name = $email = $message = $subject = $mobile = "";

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $query = "SELECT * FROM messages";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    if($stmt->rowCount()>0){
        $data = $stmt->fetchAll();
        echo json_encode(['status'=>'200', 'message'=>'success', 'data'=>$data]);
    } else {
        echo json_encode(['status'=>'500', 'message'=>'No data found', 'data'=>'']);
    }
} 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = validateText($_POST["name"]);
    $email = validateText($_POST["email"]);
    $mobile = validateText($_POST["mobile"]);
    $subject = validateText($_POST["subject"]);
    $message = validateText($_POST["message"]);

    $query="INSERT INTO messages (name, email, mobile, subject, message) 
                VALUES (:name, :email, :mobile, :subject, :message)";
    $stmt = $conn->prepare($query);
    $result = $stmt->execute([
                ':name' => $name,
                ':email' => $email,
                ':mobile' => $mobile,
                ':subject' => $subject, 
                ':message' => $message,
            ]);
    
    if ($result) {        
        $response = sendMail($email,$name,$mobile,$subject,$message);
        if ($response) {
            echo '<script>alert("Your message has been delivered!")</script>';        
        }  else {
            echo '<script>alert("Sorry, could not send your message !")</script>';
        }
    } else {
        echo '<script>alert("Sorry, could not send your message !")</script>';
    }
    header("Refresh:2; url=../index.php#contact");
    // header("Location: ".$server."/index#contact"); 
    exit();
    return true;
}



function validateText($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function sendMail($email,$name,$mobile,$subject,$message)
{
    $send_to = "sdt.gshec@gmail.com";
    // $send_to = "nmayur101@gmail.com";

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
