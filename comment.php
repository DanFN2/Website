<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    $comment = htmlspecialchars($_POST['comment']);  // Kommentar aus dem Formular holen und XSS absichern

    // Kommentar in einer Datei speichern (in einer echten Anwendung in einer Datenbank speichern)
    $file = fopen("comments.txt", "a");
    fwrite($file, "<p><strong>{$_SESSION['username']}:</strong> $comment</p>\n");
    fclose($file);

    header("Location: index.html#comments");
    exit();
} else {
    echo "Bitte loggen Sie sich ein, um einen Kommentar zu hinterlassen.";
}
?>