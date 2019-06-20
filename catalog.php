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
            <div class="catalog__item" style="background-image:url(img/catalog/catalog-1.jpg)"><a href="/category.html" class="catalog__item-title">Название продукции</a></div>
            <div class="catalog__item" style="background-image:url(img/catalog/catalog-2.jpg)"><a href="/category.html" class="catalog__item-title">Название продукции</a></div>
            <div class="catalog__item" style="background-image:url(img/catalog/catalog-3.jpg)"><a href="/product.html" class="catalog__item-title">Название продукции</a></div>
            <div class="catalog__item" style="background-image:url(img/catalog/catalog-4.jpg)"><a href="/category.html" class="catalog__item-title">Название продукции</a></div>
            <div class="catalog__item" style="background-image:url(img/catalog/catalog-5.jpg)"><a href="/category.html" class="catalog__item-title">Название продукции</a></div>
            <div class="catalog__item" style="background-image:url(img/catalog/catalog-6.jpg)"><a href="/category.html" class="catalog__item-title">Название продукции</a></div>
        </div>
    </section>

<?php include 'blocks/footer.php'; ?>

</body>
</html>