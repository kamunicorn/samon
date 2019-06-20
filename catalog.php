<?php
$categories = [
    [
        'name' => 'Тротуарная плитка',
        'code' => 'trotuar',
        'image' => 'trotuar.jpg'
    ], [
        'name' => 'Бетонопаркет',
        'code' => 'parket',
        'image' => 'parket-2.jpg'
    ], [
        'name' => 'Облицовочный камень',
        'code' => 'outer-stone',
        'image' => 'facing-stone.jpg'
    ], [
        'name' => 'Ступени накладные, бордюры, водостоки',
        'code' => 'different',
        'image' => 'different.jpg'
    ], [
        'name' => 'Архитектурно-ландшафтные формы',
        'code' => 'decor',
        'image' => 'decor-2.jpg'
    ], [
        'name' => 'Цветники',
        'code' => 'flower',
        'image' => 'flower.jpg'
    ]
];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <?php $title = 'Каталог'; ?>
    <?php include 'blocks/head.php'; ?>

    <link rel="stylesheet" href="css/catalog.min.css?v=1" />
</head>
<body>

<?php include 'blocks/nav.php'; ?>

    <section class="catalog section">
        <h3 class="section__title">Каталог</h3>
        <p class="catalog__subtitle">Выберите нужный тип продукта</p>
        <div class="container row">
            <?php
            foreach ($categories as $category) { ?>
                <div class="catalog__item" style="background-image:url('img/catalog/<?= $category['image']?>')"><a href="/category.php?name=<?= $category['code']?>" class="catalog__item-title"><?= $category['name']?></a></div>
            <? } ?>

        </div>
    </section>

<?php include 'blocks/footer.php'; ?>

</body>
</html>