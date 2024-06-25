<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $date = htmlspecialchars($_POST['date']);
    $message = htmlspecialchars($_POST['message']);

    // E-Mail an dich selbst senden
    $to = "deineemail@domain.de";
    $subject = "Neue Buchung von $name";
    $body = "Name: $name\nE-Mail: $email\nDatum: $date\nNachricht:\n$message";
    $headers = "From: webmaster@deinedomain.de";

    if (mail($to, $subject, $body, $headers)) {
        echo "Buchung erfolgreich! Wir werden uns bald bei Ihnen melden.";
    } else {
        echo "Es gab ein Problem bei der Buchung. Bitte versuchen Sie es später erneut.";
    }
} else {
    echo "Ungültige Anforderung.";
}
?>
