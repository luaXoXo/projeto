<style>
    footer {
    background-color: #1d7373;
    color: #fff;
    padding: 30px 20px;
    font-family: Arial, sans-serif;
}

.footer-container {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 20px;
}

.footer-section {
    flex: 1;
    min-width: 300px;
}

.footer-section h2 {
    font-size: 1.5rem;
    margin-bottom: 15px;
    color: #fff;
}

.footer-section p {
    font-size: 0.9rem;
    line-height: 1.5;
    margin-bottom: 15px;
}

.social-links {
    display: flex;
    gap: 10px;
}

.social-links a img {
    width: 30px;
    height: 30px;
    transition: transform 0.3s ease;
}

.social-links a img:hover {
    transform: scale(1.2);
}

form {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

form textarea {
    padding: 10px;
    border: none;
    border-radius: 5px;
    resize: none;
    font-family: Arial, sans-serif;
}

form textarea:focus {
    outline: 2px solid #ffdc73;
}

form button {
    padding: 10px 20px;
    background-color: #fff;
    border: none;
    border-radius: 5px;
    color: #1d7373;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

form button:hover {
    background-color: #042326;
    color: #fff;
}

</style>




<footer>
    <div class="footer-container">
        <!-- Sobre Nós -->
        <div class="footer-section">
            <h2>Sobre Nós</h2>
            <p>Na nossa loja, acreditamos que estilo e sustentabilidade podem caminhar juntos. Nossas peças são feitas com materiais biodegradáveis, respeitando o meio ambiente e oferecendo moda consciente e moderna. Faça parte dessa mudança sustentável!</p>
        </div>

        <!-- Contatos -->
        <div class="footer-section">
            <h2>Contatos</h2>
            <p>Siga-nos nas redes sociais:</p>
            <div class="social-links">
                <a href="#" class="whatsapp" aria-label="WhatsApp">
                    <img src="imagens/whatsapp.svg" alt="WhatsApp">
                </a>
                <a href="#" class="instagram" aria-label="Instagram">
                    <img src="imagens/instagram.svg" alt="Instagram">
                </a>
            </div>
        </div>

        <!-- Mensagem para o suporte -->
        <div class="footer-section">
            <h2>Fale Conosco</h2>
            <form action="#" method="post">
                <textarea name="mensagem" placeholder="Escreva sua mensagem..." rows="4" required></textarea>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>
</footer>
