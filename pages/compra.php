<?php
$conn = new PDO('mysql:host=localhost;dbname=MC', 'root', 'escola');

// Verificação de erros na conexão
if (!$conn) {
  echo "Erro ao conectar ao banco de dados: " . $conn->errorInfo()[2];
  die();
}
// Get product information from AJAX request (replace with actual data retrieval)
$productId = $_POST['productId'];
$productName = $_POST['productName'];
$price = $_POST['price'];

// Simulate adding to a cart array (replace with database logic)
$cart = [];
if (isset($_SESSION['cart'])) {
  $cart = $_SESSION['cart'];
}
$cart[] = [
  'id' => $productId,
  'name' => $productName,
  'price' => $price,
];
$_SESSION['cart'] = $cart;

echo "Produto adicionado ao carrinho!";  // Send a success message

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
            <img src="compra1-Photoroom.png" width="600px" height="400px">
        </div>
        <div class="index-text-container"> 
            <h1>compra </h1>
        </div>
    </main>
    <section class="reasons-section">
    </section>  
    <div class="contenedor-items">
            <div class="item">
                <span class="titulo-item">BMW M3</span>
                <img src="m31.jpg" alt="" class="img-item">
                <span class="precio-item">R$ 672.900</span>
                <button class="boton-item">COMPRAR</button>
            </div>
            <div class="item">
                <span class="titulo-item">porsche 911 GT3 RS</span>
                <img src="img/gt3rs1.jpg" alt="" class="img-item">
                <span class="precio-item">R$ 3.650.000</span>
                <button class="boton-item">COMPRAR</button>
            </div>
            <div class="item">
                <span class="titulo-item">Jimin</span>
                <img src="img/jimin.jpg" alt="" class="img-item">
                <span class="precio-item">R$35.000</span>
                <button class="boton-item">COMPRAR</button>
            </div>
            <div class="item">
                <span class="titulo-item">NOVO PRODUTO</span>
                <img src="img/rm2.jpg" alt="" class="img-item">
                <span class="precio-item">R$18.000</span>
                <button class="boton-item">COMPRAR</button>
            </div>
            <div class="item">
                <span class="titulo-item">NOVO PRODUTO</span>
                <img src="img/rm2.jpg" alt="" class="img-item">
                <span class="precio-item">R$32.000</span>
                <button class="boton-item">COMPRAR</button>
            </div>
            <div class="item">
                <span class="titulo-item">NOVO PRODUTO</span>
                <img src="img/rm2.jpg" alt="" class="img-item">
                <span class="precio-item">R$18.000</span>
                <button class="boton-item">COMPRAR</button>
            </div>
            <div class="item">
                <span class="titulo-item">NOVO PRODUTO</span>
                <img src="img/rm2.jpg" alt="" class="img-item">
                <span class="precio-item">R$54.000</span>
                <button class="boton-item">COMPRAR</button>
            </div>
            <div class="item">
                <span class="titulo-item">NOVO PRODUTO</span>
                <img src="img/rm2.jpg" alt="" class="img-item">
                <span class="precio-item">R$32.000</span>
                <button class="boton-item">COMPRAR</button>
            </div>
            
        </div>
       
    
        <!-- Carrinho de Compras -->
        <div class="carrito" id="carrito">
            <div class="header-carrito">
                <h2>SEU CARRINHO</h2>
            </div>

            <div class="carrito-items">
               <!-- Carrinho de compras visivel -->
            </div>
            <div class="carrito-total">
                <div class="fila">
                    <strong>Total das compras</strong>
                    <span class="carrito-precio-total">
                        R$120.000,00
                    </span>
                </div>
                <button class="btn-pagar">Pagar <i class="fa-solid fa-bag-shopping"></i> </button>
            </div>
        </div>
    </section>
</body>
</body>
</html>