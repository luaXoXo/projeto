<?php
// Parâmetros de acesso ao servidor 
$usuario = 'root';
$senha = '';
$database = 'cartle-matheus';
$host = 'localhost';

// Acessar a função de conexão ao servidor de BD
$mysqli = new mysqli($host, $usuario, $senha, $database);

// Definindo o charset UTF8 para a conexão

// Verificando a conexão
/* if($conexao === false){
    die("Erro: ".mysqli_connect_error());
} else {
    echo "Beleza, segue o jogo...";
} */
if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}
?>