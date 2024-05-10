<?php
// Verifica se os dados foram postados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);

    // Prepara o conteúdo do e-mail
    $to = 'juniormaxi@hotmail.com'; // Destinatário do email
    $subject = 'Novo Contato do Site'; // Assunto do email
    $message = "Você recebeu uma nova mensagem do site 'Em Quem Votar para Prefeito em Valparaíso de Goiás'.\n\n";
    $message .= "Nome: $name\n";
    $message .= "Email: $email\n";
    $message .= "Telefone: $phone\n";

    // Prepara os cabeçalhos do e-mail
    $headers = "From: juniormaxi@hotmail.com\r\n"; // Este email deve ser substituído pelo seu email de origem
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Envia o e-mail
    if (mail($to, $subject, $message, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Falha ao enviar a mensagem.";
    }
} else {
    // Não é POST
    echo "Método de requisição inválido.";
}
?>
