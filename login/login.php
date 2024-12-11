<?php
require "../includes/cabecalho.php";
require "../includes/conecta.php";
 
if(isset($_POST['email']) || isset($_POST['senha'])) {
 
    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {
 
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);
 
        $sql_code = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
 
        $quantidade = $sql_query->num_rows;
 
        if($quantidade == 1) {
           
            $usuario = $sql_query->fetch_assoc();
 
            if(!isset($_SESSION)) {
                session_start();
            }
 
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];
 
            header("Location: editar-produto.php");
 
        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
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
    <link rel="stylesheet" href="..\home\estilo.css">
    <link rel="stylesheet" href="estilo.css">
    <title>Login</title>
   
</head>
<body>
    <div class="page">
 
        <form method="POST" class="formLogin">
        <h1>Login</h1>
        <p>Digite os seus dados de acesso no campo abaixo.</p>
            <label>E-mail</label>
            <input type="text" placeholder="Digite seu e-mail" name="email"/>
            <label>Senha</label>
            <input type="password" placeholder="Digite seu e-mail"  name="senha"/>
            <a href="esqueceu-senha.php">Esqueci minha senha</a>
            <input type="submit" value="Acessar" class="btn"/>
        </form>
    </div>
   
</body>
</html>