// Função para alternar o menu
function toggleMenu() {
    const menuOptions = document.getElementById("menuOptions");
    menuOptions.style.display = menuOptions.style.display === "block" ? "none" : "block";
}

// Função para abrir o modal
function openModal(modalId) {
    document.getElementById(modalId).classList.add('active');
    document.getElementById('overlay').classList.add('active');
}

// Função para fechar o modal
function closeModal(modalId) {
    document.getElementById(modalId).classList.remove('active');
    document.getElementById('overlay').classList.remove('active');
}

// Função para fechar todos os modais
function closeAllModals() {
    const modals = document.querySelectorAll('.modal');
    modals.forEach(modal => modal.classList.remove('active'));
    document.getElementById('overlay').classList.remove('active');
}

// Rolagem suave para as seções
document.querySelectorAll('.categories a').forEach(anchor => {
    anchor.addEventListener('click', function (event) {
        event.preventDefault();
        const targetId = this.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);

        // Faz o scroll suave
        targetElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
});

function rolagemEsquerda(containerId){
    const container = document.getElementById(containerId);
    container.scrollBy({
        left: -300, // Ajuste conforme o tamanho do card
        behavior: 'smooth'
    });
    
}



function rolagemDireita(containerId) {
    const container = document.getElementById(containerId);
    container.scrollBy({
        left: 300, // Ajuste conforme o tamanho do card
        behavior: 'smooth'
    });
}
