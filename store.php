<?php
    $pageLimit = 5;
    $curr = isset($_GET["p"]) && is_numeric($_GET("p")) ? intval($_GET["p"]) :1;
    $stmt = $pdo->prepare("SELECT * FROM products ORDER BY quantity DESC LIMIT ?, ?");
    $stmt->bindValue(1, ($curr-1) * $pageLimit, PDO::PARAM_INT);
    $stmt->bindValue(2, $pageLimit, PDO::PARAM_INT);
    $stmt->execute();
    $list = $stmt-> fetchAll(PDO::FETCH_ASSOC);
    $total = $stmt->query("SELECT * FROM products")-> rowCount();
?>

