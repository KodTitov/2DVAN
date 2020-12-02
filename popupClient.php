<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['name'];
$tel = $_POST['tel'];
$problem = $_POST['problem'];
$category = $_POST['category'];
$messanger = $_POST['messanger'];
$city = $_POST['city'];

$mail->isSMTP();                                  
$mail->Host = 'smtp.gmail.com';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               
$mail->Username = 'mail'; 
$mail->Password = 'password'; 
$mail->SMTPSecure = 'ssl';                        
$mail->Port = 465; 

$mail->setFrom('mail'); 
$mail->addAddress('mail');    

$mail->isHTML(true);                                

$mail->Subject = 'Поиск мастера';
$mail->Body    = 'Имя ' .$name . ' <br>Телефон ' .$tel. ' <br> Категория: ' .$category. '<br>Месенжер: ' .$messanger. '<br>город: ' .$city;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: thank-you.html');
}
?>