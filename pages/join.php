<?php
include_once('config.php');

// Verifica se houve um envio de formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Recebe os dados do formulário
  $email = $_POST["email"];
  $senha = $_POST["senha"];

  // Validação básica (adicione mais validações conforme necessário)
  if (empty($email) || empty($senha)) {
    echo "Por favor, preencha todos os campos.";
  } else {
    // Consulta ao banco de dados (ajuste a consulta para sua estrutura)
    $sql = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";
    $result = $conexao->query($sql);

    if ($result->num_rows > 0) {
      // Login válido, redireciona para a página adm.php
      header("Location: index.php");
    } else {
      echo "Email ou senha inválidos.";
    }
  }
}

// Formulário HTML
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
                <a href="index.php" id="logo-title"> Luks Car </a>
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
            <h1>Login</h1>
            <div class="index-sub-text-container">
                <h2>Faça login de sua conta</h2>
            </div>
        </div>
    </main>
    <section class="login-section">
        <div class="login-container">
            <h2>Entrar na Sua Conta</h2>
            <form action="join.php" method="post">
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email"><br>
                <label for="senha">Senha:</label><br>
                <input type="password" id="senha" name="senha"><br><br>
                <input type="submit" value="Entrar">
            </form>
            <p>Ainda não tem uma conta? <a href="register.php">Registre-se</a></p>
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