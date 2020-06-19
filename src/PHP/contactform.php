<?php

$nameErr = $mailErr = $subjectErr = $textErr = "";
$name = $empresa = $nit = $phone = $mailFrom = $subject = $message = "";

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if(isset($_POST['submit'])){
    if(empty($_POST['name'])){
        $nameErr = "* Nombre es requerido";
    }else{
        $name = test_input($_POST['name']);
    }

    if(empty($_POST['subject'])){
        $subjectErr = "* Asunto es requerido";
    }else{
        $subject = test_input($_POST['subject']);
    }

    if(empty($_POST['mail'])){
        $mailErr = "* E-mail es requerido";
    }else{
        $mailFrom = test_input($_POST['mail']);
    }

    if(empty($_POST['message'])){
        $textErr = "* Una descripción es requerida";
    }else{
        $message = test_input($_POST['message']);
    }

    #---------------NO REQUERIDOS-----------------


    if(empty($_POST['empresa'])){
        $empresa = "";
    }else{
        $empresa = test_input($_POST['empresa']);
    }
    if(empty($_POST['nit'])){
        $nit = "";
    }else{
        $nit = test_input($_POST['nit']);
    }
    if(empty($_POST['phone'])){
        $phone = "";
    }else{
        $phone = test_input($_POST['phone']);
    }

    $mailTo = "rulitosxd1@gmail.com";
    $headers = "De: ".$mailFrom.". Su número es ".$phone;
    $txt =  $headers."\nRecibiste un correo de ".$name.". Su empresa es ".$empresa.". Y su nit ".$nit."\n\n".$message;
 
    
    if($nameErr == '' and $mailErr == '' and $subjectErr == '' and $textErr == ''){
        mail($mailTo, $subject, $txt);
        header("Location: Contact.php?mailSend");
    }



}



