<?php require "../includes/cabecalho.php";
require "../login/funcoes-produto.php";

$masculino = masculino($mysqli);

?>

<link rel="stylesheet" href="estilosM.css">
<body>

    <div class="banner">
        <div class="banner-content">
            masculino
        </div>
    </div>

    <div class="products-container">
    <?php foreach($masculino as $produto){ ?>
        <div class="product-card">
            <img src="../home/imagens/<?=$produto['imagem']?>" alt=" ">
            <h3><?=$produto['produto']?></h3>
            <p>R$ <?=$produto['valor']?></p>
            <a href="#">Comprar</a>
            
        </div>
        <?php } ?>
    </div>

    <?php require "../includes/rodape.php"; ?>

</body>
</html>
