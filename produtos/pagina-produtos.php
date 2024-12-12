<?php
require "../includes/cabecalho.php";
require "../login/funcoes-produto.php";
      
$idProduto = $_GET['id'];

$paginaproduto = pagina($mysqli, $idProduto);
 
?>
    <title>Product Page</title>
  <link rel="stylesheet" href="estilos.css">  </link>
  
</head>
<body>
    <div class="container">
        <div class="image-section">
        <?php foreach($paginaproduto as $produto){ ?>
            <img src="..\home\imagens\<?=$produto['imagem']?>" alt="Product Image">
        </div>
        <div class="details-section">
            <h1><?=$produto['produto']?></h1>
            <p class="price">R$ <?=$produto['valor']?></p>
            <?php } ?>
            <label for="size">Tamanho:</label>
            <select id="size">
                <option value="P">P</option>
                <option value="M">M</option>
                <option value="G">G</option>
                <option value="GG">GG</option>
            </select>
 
            <button>Adicionar ao Carrinho</button>
 
            <div class="comments-section">
               
    <h3>Deixe um Comentário</h3>
    <form action="#" method="post">
        <label for="rating">Avaliação:</label>
        <select id="rating" name="rating">
            <option value="5">5 ★★★★★</option>
            <option value="4">4 ★★★★☆</option>
            <option value="3">3 ★★★☆☆</option>
            <option value="2">2 ★★☆☆☆</option>
            <option value="1">1 ★☆☆☆☆</option>
        </select>
        <label for="comment">Comentário:</label>
        <textarea id="comment" name="comment" rows="4" placeholder="Escreva seu comentário aqui..." required></textarea>
        <button type="submit">Enviar Comentário</button>
    </form>
    <div class="user-comments">
        <h4>Comentários Recentes:</h4>
        <div class="comment">
            <p><strong>João:</strong> Produto excelente! Muito confortável. <span>★★★★★</span></p>
        </div>
        <div class="comment">
            <p><strong>Ana:</strong> Gostei bastante, mas achei o tamanho um pouco pequeno. <span>★★★★☆</span></p>
        </div>
    </div>
</div>
 
</body>
</html>