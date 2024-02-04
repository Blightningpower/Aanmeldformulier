<?php
if (isset($_POST['submitButton'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $mailTo = "Info@chalgado.com";
    $message = $_POST['message'];
    $headers = "From: " . $mailFrom;
    $txt = "Je hebt een email ontvangen van " . $name . ".\n\n" . $message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsend");
}
?>
