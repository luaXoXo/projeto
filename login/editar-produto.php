<?php
require "../includes/cabecalho.php";
require "../includes/conecta.php";
require "../login/funcoes-produto.php";
 
$sql = "SELECT produto, imagem, categoria, tipo, descricao, data, valor  FROM produtos";
 
 
$resultado = executarQuery($mysqli, $sql);
$listaDeproduto = listarprodutos($mysqli);
 
 
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="..\home\estilo.css">
 
    <style>
        section{
            text-align: center;
        }
        h1 {
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            margin-top: 5%;
            margin-bottom: 4%;
        }
 
        .formulario {
            background-color: #1d7373;
            color: #fff;
            text-align: center;
            margin-left: 30%;
            margin-right: 30%;
            padding-bottom: 1%;
            padding-top: 1%;
            border-radius: 10px;
            margin-top: 4%;
        }
        .adicionar{
            display: flex;
            border-bottom: solid 1px #fff;
            text-align: center;
            align-items: center;
            padding-left: 10%;
            justify-content: space-between;
        }
        P{
            padding: 2%;
           
        }
        img{
            height: 30px;
           padding-right: 5%;
        }
        .ir-formulario{
            margin-top: 2%;
            text-decoration: none;
            color: #fff;
            background-color: #1d7373;
          padding: 2% 2%;
            border-radius: 10px;
       
        }
       
       
 
   
 
 
    </style>
</head>
 
<body>
    <section>
        <h1>Adicionar ou remover produtos</h1>
     
    <table class="table">
        <thead>
            <tr>
                <th scape="col">#id</th>
                <th scape="col">produto</th>
                <th scape="col">imagem</th>
                <th scape="col">categoria</th>
                <th scape="col">tipo</th>
                <th scape="col">descrição</th>
                <th scape="col">data</th>
                <th scape="col">valor</th>
                <th scape= "col">editar</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach( $listaDeproduto as $produto ) { ?>
                    <tr>
                        <td> <?=$produto['idProduto']?></td>
                        <td> <?=$produto['produto']?></td>
                        <td> <?=$produto['imagem']?></td>
                        <td> <?=$produto['categoria']?></td>
                        <td> <?=$produto['tipo']?></td>
                        <td> <?=$produto['descricao']?></td>
                        <td> <?=$produto['data']?></td>
                        <td> <?=$produto['valor']?></td>
                        <td></td>
                       
                        </td>
                    </tr>
<?php } ?>      
        </tbody>
    </table>
    <a href="../login/formulario.php" class="ir-formulario">adicionar produto</a>
    </section>
 
 
</body>
 
</html>