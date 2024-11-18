<?php
include_once('config.php');

// Checkar conexão
if ($conexao->connect_error) {
    die("Erro de conexão com o banco de dados: " . $conexao->connect_error);
}

// Receber dados do formulário
if (isset($_POST['nome'])  && isset($_POST['email']) && isset($_POST['senha'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
} else {
    echo "Erro: Dados do formulário não enviados corretamente.";
}

// Verificar se o e-mail já existe
$sql_verifica_email = "SELECT COUNT(*) FROM usuarios WHERE email = '$email'";
$resultado_verifica = $conexao->query($sql_verifica_email);

if ($resultado_verifica->fetch_row()[0] > 0) {
    echo "Erro: E-mail já cadastrado. Tente outro e-mail.";
} else {
    // Se o e-mail não existir, prosseguir com a inserção
    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

    if ($conexao->query($sql) === TRUE) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar o usuário: " . $conexao->error;
    }
}

$conexao->close();

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luks Car Store - Home</title>
    <link rel="stylesheet" href="s.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:ital,wght@0,400..700;1,400..700&family=Russo+One&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="navegation-container"> 
            <div class="nav-left-container">
                <a href="index.php" id="logo-title"> luks Car </a>
            </div>
            <div class="nav-mid-container">
                <ul class="item-list">
                    <li id="item-list-number1"><a href="review.php">Avaliações</a></li>
                    <li id="ite-list-number2"><a href="join.php">Entrar</a></li>
                </ul>
            </div>
            <div class="nav-right-container">
                <a href="register.php">REGISTRE-SE</a>
            </div>
        </div>
    </nav>
    <main>
        <div class="index-image-container">
            <img src="mercedes-car.png" width="420px" height="220px">
        </div>
        <div class="index-text-container"> 
            <h1>Luks Car</h1>
            <div class="index-sub-text-container">
                <h2>Procurando por aluguel de veiculos?</h2>
                <h2>nossa loja oferece o melhor serviço desse ramo</h2>
            </div>
        </div>
    </main>
    <section class="register-section">
        <div class="register-container">
            <h2>Criar uma Conta</h2>
            <form action="register.php" method="post">
                <label for="nome">Nome:</label><br>
                <input type="text" id="nome" name="nome"><br>
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email"><br>
                <label for="senha">Senha:</label><br>
                <input type="password" id="senha" name="senha"><br><br>
                <input type="submit" value="Registrar">
            </form>
            <p>Já tem uma conta? <a href="join.php">Entrar</a></p>
        </div>
    </section> 
    <footer>
        <div class="footer-container">
            <div class="footer-left">
                <h3>Localização</h3>
                <p>Rua dos Carros, 1234</p>
                <p>Cidade dos Carros</p>
            </div>
            <div class="footer-mid">
                <h3>Horário de Funcionamento</h3>
                <p>Seg-Sex: 8:00 - 18:00</p>
                <p>Sáb-Dom: 9:00 - 15:00</p>
            </div>
            <div class="footer-right">
                <h3>Contato</h3>
                <p>Email: info@kwcarstore.com</p>
                <p>Telefone: +55 45 12345-6789</p>
            </div>
        </div>
    </footer>
</body>
</html>