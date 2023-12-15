<?php
    session_start();
    include 'cartConnect.php';
    $con = databaseConnect();
    $page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'store';
    include $page . '.php';
    $pageLimit = 5;
    $curr = isset($_GET["p"]) && is_numeric($_GET("p")) ? intval($_GET["p"]) :1;
    $stmt = $pdo->prepare("SELECT * FROM products ORDER BY quantity DESC LIMIT ?, ?");
    $stmt->bindValue(1, ($curr-1) * $pageLimit, PDO::PARAM_INT);
    $stmt->bindValue(2, $pageLimit, PDO::PARAM_INT);
    $stmt->execute();
    $list = $stmt-> fetchAll(PDO::FETCH_ASSOC);
    $total = $stmt->query("SELECT * FROM products")-> rowCount();
?>

<!DOCTYPE html>
<link rel="stylesheet" href="GroupProject.css" media="(min-width: 769px)">
<link rel="stylesheet" href="GroupProjectTablet.css" media="(min-width: 481px) and (max-width: 768px)">
<link rel="stylesheet" href="GroupProjectPhone.css" media="(max-width: 480px)">
<html lang="en">
<main>
    <head>
        <title>Store</title>
    </head>
    <nav>
        <a href="HomePage.php">HOME</a>
        <a href="cart.php">CART</a>
    </nav>
    <body>
            
    <?php foreach ($products as $product): ?>
        <a href="index.php?page=product&id=<?= $product['id'] ?>" class="product">
            <img src="imgs/<?= $product['img'] ?>" width="200" height="200" alt="<?= $product['name'] ?>">
            <span class="name">
                    <?= $product['name'] ?>
                </span>
                <span class="price">
                    &dollar;
                    <?= $product['price'] ?>
                    <?php if ($product['rrp'] > 0): ?>
                <span class="rrp">&dollar;
                    <?= $product['rrp'] ?>
                </span>
                <?php endif; ?>
            </span>
        </a>
    <?php endforeach; ?>

    </body>
</main>