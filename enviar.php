<?php
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $name = $_GET["name"];
    $email = $_GET["email"];
    $message = $_GET["message"];

    $to = "a.pissulin@gmail.com";
    $subject = "Novo formulário de contato";
    $emailBody = "Nome: $name\n";
    $emailBody .= "Email: $email\n";
    $emailBody .= "Mensagem: $message\n";

    if (mail($to, $subject, $emailBody)) {
        http_response_code(200);
    } else {
        http_response_code(500);
    }
} else {
    http_response_code(400);
}
?>
