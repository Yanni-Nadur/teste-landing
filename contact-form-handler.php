<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $email_from = 'teste1@gmail.com';

    $email_subject = "Cadastro";

    $email_body = "Olá! Agradecemos a sua participação!\n".
                    "Nome: $name.\n".
                    "Email: $visitor_email.\n".
                    "Telefone: $telefone.\n";
    
    $to = "$visitor_email, rh@tinpix.com.br";

    $headers = "From: $email_from \r \n";

    $headers .= "Reply-to: $visitor_email \r \n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: index.html");
?>