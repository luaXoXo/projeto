<?php require "../includes/cabecalho.php" ?>
    <title>Product Page</title>
  <link rel="stylesheet" href="estilos.css">  </link>
  
</head>
<body>
    <div class="container">
        <div class="image-section">
            <img src="..\home\imagens\calca-cargo.png" alt="Product Image">
        </div>
        <div class="details-section">
            <h1>Calça Cargo Jeans Masculina</h1>
            <p class="price">R$150,00</p>

            <label for="size">Tamanho:</label>
            <select id="size">
                <option value="P">P</option>
                <option value="M">M</option>
                <option value="G">G</option>
                <option value="GG">GG</option>
            </select>

            <button>Adicionar ao Carrinho</button>

            <div class="other-sellers">
                <h3>Outros Vendedores</h3>
                <div>
                    <span>R$200,99</span>
                    <span>Envio Nacional</span>
                </div>
                <div>
                    <span>R$300,00</span>
                    <span>Envio Nacional</span>
                </div>
            </div>

            <div class="reviews">
                <p><strong>Avaliação dos Clientes:</strong> 4.91 ★★★★★</p>
            </div>
        </div>
    </div>
</body>
</html>
