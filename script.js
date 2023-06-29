// script.js
document.getElementById("contact-form").addEventListener("submit", function(e) {
    e.preventDefault();

    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;

    var formData = new FormData();
    formData.append("name", name);
    formData.append("email", email);
    formData.append("message", message);

    var xhr = new XMLHttpRequest();
    xhr.open("GET", "enviar.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onload = function() {
        if (xhr.status === 200) {
            console.log("Formulário enviado com sucesso!");
            // Aqui você pode adicionar a lógica adicional, como exibir uma mensagem de sucesso ou redirecionar para outra página
        } else {
            console.log("Erro ao enviar o formulário.");
            // Aqui você pode adicionar a lógica adicional, como exibir uma mensagem de erro ao usuário
        }
    };

    xhr.send(formData);
});
