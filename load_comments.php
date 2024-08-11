<?php
if (file_exists("comments.txt")) {
    echo file_get_contents("comments.txt");
} else {
    echo "Noch keine Kommentare vorhanden.";
}
?>