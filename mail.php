<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

//To whom send this info
$to = "josealberto.jam@outlook.com";

$subject = "Email do Portfolio";
$txt = "Nome = ". $name . "\r\n Email = ". $email . "\r\n Assunto = ". $subject "\r\n
    Mensagem = ". $message;
$headers = "From: noreply@jose-m.herokuapp.com" . "\r\n" .;
if($email!=NULL){
    mail($to, $subject, $txt, $headers);
}

header("Location:index.html");

?>