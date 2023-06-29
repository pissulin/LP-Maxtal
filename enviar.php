<?php
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

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
