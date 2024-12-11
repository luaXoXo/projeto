<?php
require "../includes/cabecalho.php";
require "../includes/conecta.php";
require "../login/funcoes-produto.php";
// mysqli, $produto, $imagem, $categoria, $tipo, $descricao, $data, $valor
if(isset($_POST['registrar'])){
    $produto = $_POST['produto'];
    $imagem = $_FILES['imagem'];
    $categoria = $_POST['categoria'];
    $tipo = $_POST['tipo'];
    $descricao = $_POST['descricao'];
    $data = $_POST['data'];
    $valor = $_POST['valor'];
 
    // Capturando os dados da imagem que será enviada
    $imagem = $_FILES['imagem']; // Isso acessa o campo imagem do form.
 
    // Fazendo o upload da imagem para o servidor
    upload($imagem);
 
    // Enviar os dados para o banco de dados
    inserirproduto(
        $mysqli, $produto, $imagem['name'],$categoria,$tipo,$descricao,$data, $valor);
 
    // Redirecionando para a página de noticias.php
    header("location: editar-produto.php");
}
 
?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../home/estilo.css">
    <style>
        *{
            font-family: Arial, sans-serif;
        }
        h1{
            text-align: center;
        }
        form{
            text-align: center;
            padding: 3% 0%;
            border: solid 4px #1d7373;
            margin: 1% 30%;
            color: #1d7373;
            border-radius: 5px;
        }
        .enviar{
            display: flex;
            flex-direction: column;
            text-align: center;
        }
        .label,.formulario{
           padding: 2%;
           width: 60%;
          margin: auto;
          border-radius: 5px;
        }
        .descricao{
            padding: 5%;
 
        }
        .botao{
            background-color: #1d7373;
            color: #fff;
            padding: 2% 6%;
            width: auto;
            border-radius: 30px;
            cursor: pointer;
         
        }
     
    </style>
</head>
<body>
    <section>
        <h1>Registro de Produtos</h1>
        <form action="" autocomplete="off" enctype="multipart/form-data" method="post" name="inserir">
            <div class="enviar">
            <label class="label">nome do produto:</label ><input type="text" name="produto" class="produto formulario">
            <br>
            <label class="label">imagem:</label><input type="file" name="imagem" class="imagem formulario">
            <br>
            <label class="label">categoria:</label><input type="text" name="categoria" class="categoria formulario">
            <br>
            <label class="label">tipo:</label><input type="text" name="tipo" class="tipo formulario">
            <br>
            <label class="label">data</label><input type="date" name="data" class="data formulario">
            <br>
            <label class="label">descrição:</label><textarea type="text" name="descricao" placeholder="máximo 400 caracteres.." class="descricao formulario"></textarea>
            <br>
            <label class="label">valor:</label><input type="number" name="valor" class="valor formulario" step="0.01">
            <br>
            <button class="botao formulario" name="registrar" >registrar</button>
        </div>
        </form>
    </section>
 
    <footer>
    <?php require "../includes/rodape.php" ?>
    </footer>
</body>
</html>