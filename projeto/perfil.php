<?php
// Iniciar sessão
session_start();

// Conectar ao banco de dados
$dbHost ='database-2.cnw8wq9dfpdx.us-east-1.rds.amazonaws.com';
$dbUsername = 'admin';
$dbPassword = 'projetoaws';
$dbName = 'projeto';  // Substitua pelo nome do seu banco de dados

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Verificar se o usuário está logado
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");  // Redirecionar para página de login se não estiver logado
    exit();
}

// Obter o nome de usuário logado
$usuario = $_SESSION['usuario'];
$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // O usuário foi encontrado
    $user = $result->fetch_assoc();
    $cpf_user = $user['cpf'];
    $email_user = $user['email'];
} else {
    echo "Usuário não encontrado!";
    exit();
}

// Obter telefones associados ao usuário
$sql_telefones = "SELECT * FROM telefone WHERE cpf_user = '$cpf_user'";
$telefones_result = $conn->query($sql_telefones);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Usuário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Bem-vindo, <?php echo htmlspecialchars($usuario); ?>!</h1>
        </header>

        <section class="informacoes">
            <h2>Informações do Usuário</h2>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($email_user); ?></p>
            <p><strong>CPF:</strong> <?php echo htmlspecialchars($cpf_user); ?></p>
        </section>

        <section class="telefones">
            <h3>Telefones Associados</h3>
            <ul>
                <?php
                if ($telefones_result->num_rows > 0) {
                    while ($telefone = $telefones_result->fetch_assoc()) {
                        echo "<li>" . htmlspecialchars($telefone['ntelefone']) . "</li>";
                    }
                } else {
                    echo "<li>Não há números de telefone associados.</li>";
                }
                ?>
            </ul>
        </section>

        <section class="adicionar-telefone">
            <h3>Adicionar Novo Número de Telefone</h3>
            <form method="POST" action="adicionar_telefone.php">
                <label for="telefone">Número de Telefone:</label>
                <input type="text" name="telefone" id="telefone" required>
                <button type="submit">Adicionar Telefone</button>
            </form>
        </section>
    </div>
</body>
</html>

<?php
// Fechar a conexão
$conn->close();
?>
