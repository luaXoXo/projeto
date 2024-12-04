<?php
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Captura os dados do formulário
    $email = $_POST['email'];
    $senha = $_POST['password'];
    $novaSenha = $_POST['nova-password'];

    // Validação simples dos campos
    if (empty($email) || empty($senha) || empty($novaSenha)) {
        echo "<script>alert('Todos os campos são obrigatórios.');</script>";
    } elseif ($senha !== $novaSenha) {
        
        echo "<script>alert('As senhas não coincidem.');</script>";
    } else {
        // Endereço de e-mail do destinatário (aqui pode ser um e-mail fixo ou configurável)
        $destinatario = "seuemail@dominio.com";
        
        // Assunto do e-mail
        $assunto = "Recuperação de Conta";

        // Corpo do e-mail
        $mensagem = "Recebemos uma solicitação para a recuperação da sua conta.\n\n";
        $mensagem .= "E-mail: " . $email . "\n";
        $mensagem .= "Nova Senha: " . $novaSenha . "\n";
        $mensagem .= "Caso não tenha feito essa solicitação, por favor ignore este e-mail.";

        // Cabeçalhos do e-mail
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";
        $headers .= "From: noreply@seusite.com" . "\r\n";

        // Envia o e-mail
        if (mail($destinatario, $assunto, $mensagem, $headers)) {
            echo "<script>alert('E-mail enviado com sucesso!');</script>";
        } else {
            echo "<script>alert('Erro ao enviar o e-mail. Tente novamente.');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    
    <title>Recuperação de Conta</title>
</head>
<body>
    <div class="page">
        <form method="POST" class="formLogin">
            <h1>Recuperação</h1>
            <p>Digite os seus dados de acesso no campo abaixo.</p>
            <label for="email">E-mail</label>
            <input type="email" name="email" placeholder="Digite seu e-mail" autofocus="true" required />
            <label for="password">Senha</label>
            <input type="password" name="password" placeholder="Digite sua nova senha" required />
            <label for="nova-password">Confirmar senha</label>
            <input type="password" name="nova-password" placeholder="Digite sua nova senha" required />
            
            <input type="submit" value="Confirmar" class="btn" />
        </form>
    </div>
    
    <script src="validacao.js"></script>
</body>
</html>