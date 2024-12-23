<?php
 require "../includes/cabecalho.php";
 require "../login/funcoes-produto.php";
   


 $destaque = destaques($mysqli);
 $promocao = promocoes($mysqli);
 $lancamento = lancamentos($mysqli);



   ?>
    <div class="video-background">
        <video autoplay muted loop id="background-video">
            <source src="imagens/8306452-uhd_4096_2160_25fps.mp4" type="video/mp4">
        </video>
    </div>

    <div class="search-bar search">
        <input type="text" placeholder="O que deseja buscar">
        <button>Buscar</button>
    </div>

    <!-- Aba de Categorias -->
    <div class="categorias">
        <ul>
            <li><a href="../categorias/masculino.php">Masculino
            </a></li>
            <li><a href="../categorias/feminino.php">Feminino</a></li>
            <li><a href="../categorias/infantil.php">Infantil</a></li>
           
        </ul>
    </div>
    <section class="destaque">
    <section class="categorias-produtos">
    <div class="categoria">
        <h2>Destaques</h2>
        <div class="carrossel">

            <button class="prev" onclick="rolagemEsquerda('destaques')">&#8592;</button>

            <div class="produtos-container" id="destaques">
                <?php foreach($destaque as $produto){ ?>
                
                <div class="card">
                <a href="../produtos/pagina-produtos.php?id=<?=$produto['idProduto']?>">
                    <img src="../home/imagens/<?=$produto['imagem']?>" alt="Produto Masculino">
                    <div class="info">
                        <h3><?= $produto['produto']?></h3>
                        <p>R$<?=$produto['valor']?></p>
                    </div>
                </div></a>
            <?php } ?>
               
                <!-- Adicione mais cards conforme necessário -->
            </div>
            <button class="next" onclick="rolagemDireita('destaques')">&#8594;</button>
        </div>
    </div>
    <!-- Repita o mesmo para outras categorias como Promoções e Lançamentos -->
    <div class="categoria">
        <h2>Promoções</h2>
        <div class="carrossel">

            <button class="prev" onclick="rolagemEsquerda('promocao')">&#8592;</button>

            <div class="produtos-container" id="promocao">
            <?php foreach($promocao as $produto) { ?>
                <div class="card">
                <a href="../produtos/pagina-produtos.php?id=<?=$produto['idProduto']?>">
                    <img src="imagens/<?=$produto['imagem']?>" alt="Produto Masculino">
                    <div class="info">
                        <h3><?=$produto['produto']?></h3>
                        <p>R$ <?=$produto['valor']?></p>
                    </div>
                </div>
                </a>
                <?php } ?>
                <!-- Adicione mais cards conforme necessário -->
            </div>
          
            <button class="next" onclick="rolagemDireita('promocao')">&#8594;</button>
        </div>
       
    </div>

    <div class="categoria">
        <h2>Lançamentos</h2>
        <div class="carrossel">

            <button class="prev" onclick="rolagemEsquerda('lancamentos')">&#8592;</button>

            <div class="produtos-container" id="lancamentos">
                
                
                <?php foreach($lancamento as $produto){ ?>
                    <div class="card">
                    <a href="../produtos/pagina-produtos.php?id=<?=$produto['idProduto']?>">
                    <img src="imagens/<?=$produto['imagem']?>" alt="Produto Masculino">
                    <div class="info">
                        <h3><?=$produto['produto']?></h3>
                        <p>R$ <?=$produto['valor']?></p>
                    </div>
                </div>
                </a>

                <?php } ?>
                <!-- Adicione mais cards conforme necessário -->
                </div>
            <button class="next" onclick="rolagemDireita('lancamentos')">&#8594;</button>
        </div>
    </div>
</section>


    </section>
    <?php require "../includes/rodape.php"; ?>
    <!-- Fundo Escuro -->
    <div class="overlay" id="overlay" onclick="closeAllModals()"></div>
    <script src="scripit.js"></script> <!-- Arquivo JavaScript -->
</body>


</html>