<?php $all_products = [
    'trotuar' => [
        'title' => 'Тротуарная плитка',
        'products' => [[
            'name' => 'Тротуарная плитка «Бабочка»',
            'dim' => '450х210х40 мм',
            'in_square_meter' => 13.5,
            'cost' => 160,
            'image' => 'babochka.jpg'
        ], [
            'name' => 'Тротуарная плитка «Волна»',
            'dim' => '300х300х30 мм',
            'in_square_meter' => 12.11,
            'cost' => 160,
            'image' => 'volna.jpg'
        ]],
    ],
    'flower' => [
        'title' => 'Цветники',
        'products' => [[
            'name' => 'Цветники «Бабочка»',
            'dim' => '450х210х40 мм',
            'in_square_meter' => 13.5,
            'cost' => 160,
            'image' => 'babochka.jpg'
        ], [
            'name' => 'Цветники «Волна»',
            'dim' => '300х300х30 мм',
            'in_square_meter' => 12.11,
            'cost' => 160,
            'image' => 'volna.jpg'
        ]],
    ]
];
if (!array_key_exists($_GET['name'], $all_products)) {
    header('Location: 404.php');
    die();
}

$category = $_GET['name'];
$products_of_category = $all_products[$category]['products'];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <?php $title = $all_products[$category]['title']; ?>
    <?php include 'blocks/head.php'; ?>

    <link rel="stylesheet" href="css/category.min.css?v=1" />
</head>
<body>

<?php include 'blocks/nav.php'; ?>

    <section class="category section">
        <div class="container">
            <h3 class="section__title"><?=$title?></h3>
            <p class="category__subtitle">Для организаций и юридических лиц действует специальная цена</p>
            <div class="row">
                <?php
                foreach ($products_of_category as $product) { ?>
                    <div class="category__item product">
                        <img src="img/products/<?= $product['image']?>" alt="<?= $product['name']?>" class="product__img">
                        <p class="product__desc"><span class="product__name"><?= $product['name']?></span>
                            <br>Размер <?= $product['dim']?>
                            <br>Количество в м<sup>2</sup> – <?= $product['in_square_meter']?>
                            <br>Цена розничная – <?= $product['cost']?>
                        </p>
                    </div>
                    <div class="category__item product">
                        <img src="img/products/<?= $product['image']?>" alt="<?= $product['name']?>" class="product__img">
                        <p class="product__desc"><span class="product__name"><?= $product['name']?></span>
                            <br>Размер <?= $product['dim']?>
                            <br>Количество в м<sup>2</sup> – <?= $product['in_square_meter']?>
                            <br>Цена розничная – <?= $product['cost']?>
                        </p>
                    </div>
                <? } ?>

            </div>
        </div>
    </section>

<?php include 'blocks/footer.php'; ?>

</body>
</html>