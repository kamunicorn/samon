<?php 
include 'php/catalog-info.php';

if (!array_key_exists($_GET['name'], $products)) {
    header('Location: 404.php');
    die();
}

$category = $_GET['name'];
$products_of_category = $products[$category];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <?php $title = $categories[$category]['name']; ?>
    <?php include 'php/head.php'; ?>

    <link rel="stylesheet" href="css/category.min.css?v=2" />
</head>
<body>

<?php include 'php/nav.php'; ?>

    <section class="category section">
        <div class="container">
            <h3 class="section__title"><?=$title?></h3>
            <p class="section__subtitle">Для оптовых покупателей и юридических лиц действует специальная цена</p>
            <div class="row">
                <?php
                foreach ($products_of_category as $product) { ?>
                    <div class="category__item product">
                        <img src="img/products/<?= $product['image']?>" alt="<?= $product['name']?>" class="product__img">
                        <p class="product__desc"><span class="product__name"><?= $product['name']?></span>

                            <? if ($product['dim']) { ?>
                            <br>Размер – <?= $product['dim']; }?>

                            <? if ($product['in_m2']) { ?>
                            <br>Количество в м<sup>2</sup> – <?= $product['in_m2']?> шт.<?}?>
                            
                            <? if ($product['complect']) { ?>
                            <br><?= $product['complect']; }?>

                            <br>Цена розничная – <?= $product['cost']?> руб.
                        </p>
                    </div>
                <? } ?>

            </div>
        </div>
    </section>

<?php include 'php/footer.php'; ?>

</body>
</html>