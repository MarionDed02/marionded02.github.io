<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = 'dedieu.marion.flore@gmail.com';
    $subject = 'Nouveau message de ' . $name;
    $message = 'De : ' . $name . ' (' . $email . ')<br><br>' . $message;
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-type: text/html\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo 'Le message a bien été envoyé.';
    } else {
        echo 'Une erreur s\'est produite lors de l\'envoi du message.';
    }
}
?>
