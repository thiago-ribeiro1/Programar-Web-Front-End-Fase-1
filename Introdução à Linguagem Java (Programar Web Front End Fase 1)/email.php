<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Dados do formulário
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Corpo do Email
    $to = "thiagoribeiroramos_@outlook.com";
    $subject = "Nova mensagem do formulário de contato";
    $body = "Nome: $name\n";
    $body .= "Email: $email\n";
    $body .= "Mensagem:\n$message";

    // Cabeçalhos para garantir a codificação UTF-8
    $headers = "Content-type: text/plain; charset=UTF-8\r\n";
    $headers .= "From: $email\r\n";

    // Enviar o email
    if (mail($to, $subject, $body)) {
        echo "<script>alert('Mensagem enviada com sucesso!');window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Ocorreu um erro ao enviar a mensagem. Por favor, tente novamente mais tarde.');window.location.href='index.html';</script>";
    }
} else {
    // Se não for uma solicitação POST, redirecione para a página inicial
    header("Location: index.html");
    exit;
}
?>
