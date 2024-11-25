function redirectToAdminPage() {
    // Simulando uma requisição ao servidor para autenticação
    var usuario = prompt("Digite o nome de usuário:");
    var senha = prompt("Digite a senha:");
  
    // Verificando se as credenciais são válidas
    if (usuario === "adm" && senha === "123") {
        // Redireciona para a página de administração
        window.location.href = "sistema.php";
    } else {
        alert("Credenciais inválidas. Você não tem permissão para acessar.");
    }
  }