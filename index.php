<?php
include_once "src/listProducts.php";
include_once "src/listProductsItem.php";
include_once "src/productRepository.php";
include_once "src/repositories.php";
include_once "src/product.php";


$productRepository = new ProductRepository();
$products = $productRepository->getAll();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <div class="card">
            <?php listProducts($products); ?>
        </div>
    </div>

    <!-- bootstrap  -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>

</html>