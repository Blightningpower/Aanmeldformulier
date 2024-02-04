<?php
if (isset($_POST['submitButton'])) {
    $name =$_POST['Voor- en Achternaam'];
    $subject =$_POST['onderwerp'];
    $mailFrom =$_POST['Emailadres'];
    $mailTo = "Bavli2002@hotmail.com";
    $message =$_POST['Bericht'];
    $headers = "From: ".$mailFrom;
    $txt ="Je hebt een email ontvangen van ".$name.".\n\n".$message;



    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsend");
}
?>