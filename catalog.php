<?php
include 'php/catalog-info.php';

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <?php $title = 'Каталог'; ?>
    <?php include 'php/head.php'; ?>

    <link rel="stylesheet" href="css/catalog.min.css?v=2" />
</head>
<body>

<?php include 'php/nav.php'; ?>

    <section class="catalog section">
        <h3 class="section__title">Каталог</h3>
        <p class="section__subtitle">Выберите нужный тип продукта</p>
        <div class="container row">
            <?php
            foreach ($categories as $code => $category) { ?>
                <div class="catalog__item" style="background-image:url('img/catalog/<?= $category['image']?>')"><a href="/category.php?name=<?= $code ?>" class="catalog__item-title"><?= $category['name']?></a></div>
            <? } ?>

        </div>
    </section>

<?php include 'php/footer.php'; ?>

</body>
</html>