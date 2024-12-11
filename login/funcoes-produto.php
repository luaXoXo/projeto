<?php
require "../includes/conecta.php";
 
// Usada em admin/noticia-insere.php
function inserirproduto($mysqli, $produto, $imagem, $categoria, $tipo, $descricao, $data, $valor)
{
 
    $conexao = "INSERT INTO produtos(produto,imagem,categoria,tipo,descricao,data,valor)
            VALUES('$produto', '$imagem', '$categoria', '$tipo' ,'$descricao', '$data' , '$valor')";
 
 
    executarQuery ($mysqli, $conexao);
}
function executarQuery($mysqli, $conexao)
{
    $consulta = mysqli_query($mysqli, $conexao) or die(mysqli_error($mysqli));
    return $consulta;
}
function upload($arquivo){
 
    /* Array para validação dos tipos permitidos */
    $tiposValidos = [
        "image/png",
        "image/jpeg",
        "image/gif",
        "image/svg+xml"
    ];
    /* Verificando se o tipo do arquivo NÃO É
    um dos existentes no array tiposValidos */
    if (!in_array($arquivo['type'], $tiposValidos)) {
        // Se não for para tudo, dá um alerta e volta pra página anterior
        echo "<script>
                alert('Formato inválido!');
                history.back();
            </script>";
        exit; // mesma coisa que o die()
        /* Pegando apenas o nome/extensão do arquivo */
    $nome = $arquivo['name'];
 
    /* Obtendo do servidor o local/nome temporário
    para o processo de upload */
    $temporario = $arquivo['tmp_name'];
 
    /* Definindo da pasta de destino + nome do arquivo da imagem */
    $destino = "../imagens/" . $nome;
 
    /* Movendo o arquivo/imagem da área temporária
    para a pasta de destino indicada (imagens) */
    move_uploaded_file($temporario, $destino);
}
}
function listarprodutos($mysqli){
$sql = "SELECT idProduto, produto, imagem, categoria, tipo, descricao, data, valor  FROM produtos";
 
 
$resultado = executarQuery($mysqli, $sql);
return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
}

function separacaoProduto($mysqli){
    $sql = "SELECT idProduto, produto, imagem, categoria,tipo,descricao, data,valor FROM produtos WHERE tipo = 'destaque' ";
    $resultado = executarQuery($mysqli, $sql);
    return mysqli_fetch_all($resultado, MYSQLI_ASSOC);

}
?>