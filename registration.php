<?php

    session_start();
    use PHPMailer\PHPMailer\PHPMailer;
  //  use PHPMailer\PHPMailer\Exception;
    
    require 'db/PHPMailer/src/Exception.php';
    require 'db/PHPMailer/src/PHPMailer.php';
    require 'db/PHPMailer/src/SMTP.php';
    $con = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($con, 'renthub');
    $pass = $_POST['password'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];


    $num2 = mysqli_num_rows(mysqli_query($con,"select * from rtable where email = '$email'"));

    if ($num2 > 0){
       
        header('location: login.php?failed');
    }
    else{
        $hash = md5( rand(0,1000) ); 
        $reg = "insert into rtable(name, password, email, type, hash, status, phone) values('$name', '$pass', '$email', 'user', '$hash', '0', '$phone')";
        mysqli_query($con, $reg);


$mail = new PHPMailer;

$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'usmanmazhar562@gmail.com';          // SMTP username
$mail->Password = 'hondacg125'; // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                          // TCP port to connect to

$mail->setFrom('noreply@suleman.com', 'Suleman');
$mail->addReplyTo('info@suleman.com', 'Suleman');
$mail->addAddress($email);   // Add a recipient
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1>Thanks for signing up!</h1>';
$bodyContent .= '<p>Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
<br>
------------------------
<br> Email: '.$email.'
<br> Password: '.$pass.'
<br>
------------------------ <br>
  
Please click this link to activate your account: <br>
http://localhost/state/varify.php?email='.$email.'&hash='.$hash.'
  
</p>'; // Our message above including the link


$mail->Subject = 'Email from Localhost by Rent Hub';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

header('location: login.php?pass');
    }


    ?>