<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $contato = $_POST['contato'];
    $descricao = $_POST['descricao'];

    $to = "mauriciomarinho807@gmail.com";
    $subject = "Novo formulário de contato";
    $message = "Telefone: " . $telefone . "\n";
    $message .= "E-mail: " . $email . "\n";
    $message .= "Contato: " . $contato . "\n";
    $message .= "Descrição: " . $descricao . "\n";

    $headers = "From: seu-email@gmail.com" . "\r\n" .
        "Reply-To: " . $email . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo "E-mail enviado com sucesso";
    } else {
        echo "Erro no envio do e-mail";
    }
}
?>
