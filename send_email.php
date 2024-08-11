<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // E-Mail-Zieladresse
    $to = "daniloheinz@gmail.com";
    // Betreff der E-Mail
    $subject = "Neue Kontaktanfrage von $name";
    
    // Aufbau der Nachricht
    $body = "Name: $name\n";
    $body .= "E-Mail: $email\n";
    $body .= "Nachricht:\n$message";
    
    // Header der E-Mail
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    // E-Mail senden
    if (mail($to, $subject, $body, $headers)) {
        echo "Danke, Ihre Nachricht wurde gesendet.";
    } else {
        echo "Entschuldigung, beim Senden der Nachricht ist ein Fehler aufgetreten.";
    }
}
?>