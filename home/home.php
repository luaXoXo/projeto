<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página</title>
    <link rel="stylesheet" href="estilo.css"> <!-- Arquivo CSS -->
</head>

<body>
    <!-- Cabeçalho -->
    <header>
        <div class="menu-container">
            <button class="menu-toggle" onclick="toggleMenu()">Menu</button>
            <div class="menu-options" id="menuOptions">
                <a href="../login/login.php">Login</a>
                <a href="../login/registro.php">Registrar</a>
                <a href="#suporte">Suporte</a>
            </div>
        </div>
        <img src="imagens/iocn.png" alt="Logo">
        <div class="cart-container">
    <button class="cart-button">
      🛒 <span class="cart-count">3</span>
    </button>
  </div>
    </header>
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
    <div class="categories">
        <ul>
            <li><a href="#masculino">Masculino</a></li>
            <li><a href="#feminino">Feminino</a></li>
            <li><a href="#infantil">Infantil</a></li>
           
        </ul>
    </div>
    <section class="destaque">
    <section class="categorias-produtos">
    <div class="categoria">
        <h2>Destaques</h2>
        <div class="carrossel">

            <button class="prev" onclick="rolagemEsquerda('destaques')">&#8592;</button>

            <div class="produtos-container" id="destaques">
                <div class="card">
                    <img src="imagens/calca-cargo.png" alt="Produto Masculino">
                    <div class="info">
                        <h3>Camiseta</h3>
                        <p>R$50</p>
                    </div>
                </div>
                <div class="card">
                    <img src="imagens/produto-masculino2.png" alt="Produto Masculino">
                    <div class="info">
                        <h3>Jaqueta</h3>
                        <p>R$200</p>
                    </div>
                </div>
                <div class="card">
                    <img src="imagens/produto-masculino2.png" alt="Produto Masculino">
                    <div class="info">
                        <h3>Jaqueta</h3>
                        <p>R$200</p>
                    </div>
                </div>
                <div class="card">
                    <img src="imagens/produto-masculino2.png" alt="Produto Masculino">
                    <div class="info">
                        <h3>Jaqueta</h3>
                        <p>R$200</p>
                    </div>
                </div>
                <!-- Adicione mais cards conforme necessário -->
            </div>
            <button class="next" onclick="rolagemDireita('destaques')">&#8594;</button>
        </div>
    </div>
    <!-- Repita o mesmo para outras categorias como Promoções e Lançamentos -->
    <div class="categoria">
        <h2>Promoçoes</h2>
        <div class="carrossel">

            <button class="prev" onclick="rolagemEsquerda('promocao')">&#8592;</button>

            <div class="produtos-container" id="promocao">
                <div class="card">
                    <img src="imagens/calca-cargo.png" alt="Produto Masculino">
                    <div class="info">
                        <h3>Camiseta</h3>
                        <p>R$50</p>
                    </div>
                </div>
                <div class="card">
                    <img src="imagens/produto-masculino2.png" alt="Produto Masculino">
                    <div class="info">
                        <h3>Jaqueta</h3>
                        <p>R$200</p>
                    </div>
                </div>
                <div class="card">
                    <img src="imagens/produto-masculino2.png" alt="Produto Masculino">
                    <div class="info">
                        <h3>Jaqueta</h3>
                        <p>R$200</p>
                    </div>
                </div>
                <div class="card">
                    <img src="imagens/produto-masculino2.png" alt="Produto Masculino">
                    <div class="info">
                        <h3>Jaqueta</h3>
                        <p>R$200</p>
                    </div>
                </div>
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
                <div class="card">
                    <img src="imagens/calca-cargo.png" alt="Produto Masculino">
                    <div class="info">
                        <h3>Camiseta</h3>
                        <p>R$50</p>
                    </div>
                </div>
                <div class="card">
                    <img src="imagens/produto-masculino2.png" alt="Produto Masculino">
                    <div class="info">
                        <h3>Jaqueta</h3>
                        <p>R$200</p>
                    </div>
                </div>
                <div class="card">
                    <img src="imagens/produto-masculino2.png" alt="Produto Masculino">
                    <div class="info">
                        <h3>Jaqueta</h3>
                        <p>R$200</p>
                    </div>
                </div>
                <div class="card">
                    <img src="imagens/produto-masculino2.png" alt="Produto Masculino">
                    <div class="info">
                        <h3>Jaqueta</h3>
                        <p>R$200</p>
                    </div>
                </div>
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