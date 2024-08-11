<?php
session_start();

// Dummy credentials (in einer echten Anwendung durch eine Datenbank ersetzen)
$correct_username = 'user';
$correct_password = 'pass';

// Daten vom Login-Formular abholen
$username = $_POST['username'];
$password = $_POST['password'];

// Überprüfung der Anmeldedaten
if ($username === $correct_username && $password === $correct_password) {
    // Benutzer ist authentifiziert, Sitzung starten
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    header("Location: index.html");
    exit();
} else {
    // Fehlermeldung bei ungültigen Anmeldedaten
    echo "Ungültiger Benutzername oder Passwort. Bitte versuchen Sie es erneut.";
}
?>