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
        
    </header>

    

    

    <div class="video-background">
        <video autoplay muted loop id="background-video">
            <source src="imagens/videoplayback.mp4" type="video/mp4">
            Seu navegador não suporta o vídeo.
        </video>
    </div>
    
    <div class="search-bar search">
        <input type="text" placeholder="O que deseja buscar">
        <button>Buscar</button>
    </div>

      <!-- Aba de Categorias -->
      <div class="categories search ">
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
        
        

    <!-- Fundo Escuro -->
    <div class="overlay" id="overlay" onclick="closeAllModals()"></div>

    <script src="scripit.js"></script> <!-- Arquivo JavaScript -->
</body>


</html>