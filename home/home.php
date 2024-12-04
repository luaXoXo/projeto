<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Airbnb Inspirada</title>
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
                <a href="#" onclick="openModal('aboutModal')">Sobre Nós</a>
            </div>
        </div>
        <img src="imagens/iocn.png" alt="Logo">
        
    </header>

    
    <!-- Modal Sobre Nós -->
    <div id="aboutModal" class="modal">
        <div class="modal-header">Sobre Nós</div>
        <div class="modal-content">
            <p>Somos uma plataforma dedicada a conectar pessoas com experiências únicas e hospedagens ao redor do mundo.</p>
            <p>Nossa missão é criar um mundo onde você se sinta em casa, em qualquer lugar.</p>
        </div>
        <div class="modal-footer">
            <button class="close" onclick="closeModal('aboutModal')">Fechar</button>
        </div>
    </div>

    <div class="search-bar">
        <input type="text" placeholder="O que deseja buscar">
        <button>Buscar</button>
    </div>

      <!-- Aba de Categorias -->
      <div class="categories">
        <h2>Categorias</h2>
        <ul>
            <li><a href="#masculino">Masculino</a></li>
            <li><a href="#feminino">Feminino</a></li>
            <li><a href="#infantil">Infantil</a></li>
            <li><a href="#esporte">Esporte</a></li>
            <li><a href="#acessorios">Acessórios</a></li>
        </ul>
    </div>

    

    <section class="listings">
        <div class="listing">
            <img src="imagens/calca-cargo.png" alt="">
            <div class="info">
                <h3>Calça cargo</h3>
                <p>ShoppingBuy</p>
                <p>R$150 </p>
            </div>
        </div>
        <div class="listing">
            <img src="imagens/canisaOversize.png" alt="">
            <div class="info">
                <h3></h3>
                <p>A</p>
                <p>En</p>
            </div>
        </div>
        <div class="listing">
            <img src="imagens/canisaOversize.png" alt="">
            <div class="info">
                <h3></h3>
                <p>A</p>
                <p>En</p>
            </div>
        </div>
        <div class="listing">
            <img src="imagens/canisaOversize.png" alt="">
            <div class="info">
                <h3></h3>
                <p>A</p>
                <p>En</p>
            </div>
        </div>
        <div class="listing">
            <img src="imagens/canisaOversize.png" alt="">
            <div class="info">
                <h3></h3>
                <p>A</p>
                <p>En</p>
            </div>
        </div>
        <div class="listing">
            <img src="imagens/canisaOversize.png" alt="">
            <div class="info">
                <h3></h3>
                <p>A</p>
                <p>En</p>
            </div>
        </div>
        <div class="listing">
            <img src="imagens/canisaOversize.png" alt="">
            <div class="info">
                <h3></h3>
                <p>A</p>
                <p>En</p>
            </div>
        </div>
        <div class="listing">
            <img src="imagens/canisaOversize.png" alt="">
            <div class="info">
                <h3></h3>
                <p>A</p>
                <p>En</p>
            </div>
        </div>
        <div class="listing">
            <img src="imagens/canisaOversize.png" alt="">
            <div class="info">
                <h3></h3>
                <p>A</p>
                <p>En</p>
            </div>
        </div>
        <div class="listing">
            <img src="imagens/canisaOversize.png" alt="">
            <div class="info">
                <h3></h3>
                <p>A</p>
                <p>En</p>
            </div>
        </div>
        

    <!-- Fundo Escuro -->
    <div class="overlay" id="overlay" onclick="closeAllModals()"></div>

    <script src="scripit.js"></script> <!-- Arquivo JavaScript -->
</body>
</html>