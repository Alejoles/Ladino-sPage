<?php

if(isset($_POST['submit'])){
    $tipo = $_POST['type'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "rulitosxd1@gmail.com";
    $headers = "De: ".$mailFrom." que es: ".$tipo;
    $txt = "Recibiste un correo de ".$name.".\n\n".$message;


    mail($mailTo, $subject, $txt, $headers);
    header("Location: Contact.php?mailSend");
}

?>