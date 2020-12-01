<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['name'];
$tel = $_POST['tel'];
$category = $_POST['category'];
$messanger = $_POST['messanger'];
$city = $_POST['city'];

$mail->isSMTP();                                  
$mail->Host = 'smtp.gmail.com';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               
$mail->Username = '2dvanservice@gmail.com'; 
$mail->Password = '2D1V1A1N'; 
$mail->SMTPSecure = 'ssl';                        
$mail->Port = 465; 

$mail->setFrom('2dvanservice@gmail.com'); 
$mail->addAddress('2dvanmain@gmail.com');    

$mail->isHTML(true);                                

$mail->Subject = 'Поиск клиента';
$mail->Body    = 'Имя ' .$name . ' <br>Телефон ' .$tel. ' <br> Категория: ' .$category. '<br>Месенжер: ' .$messanger. '<br>город: ' .$city;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: thank-you.html');
}
?>