
    document.querySelector("form").addEventListener("submit", function(event) {
        var senha = document.querySelector("input[name='password']").value;
        var confirmarSenha = document.querySelector("input[name='nova-password']").value;

        if (senha !== confirmarSenha) {
            event.preventDefault();  
            alert("As senhas não coincidem. Por favor, verifique.");
        }
    });
