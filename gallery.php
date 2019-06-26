<!DOCTYPE html>
<html lang="ru">
<head>
    <?php $title = 'Фотогалерея'; ?>
    <?php include 'php/head.php'; ?>
    <link rel="stylesheet" href="css/gallery.min.css?v=2" />
</head>
<body>

<?php include 'php/nav.php'; ?>

    <section class="gallery section">
        <h3 class="section__title">Фотогалерея</h3>
        <div class="container row">
        <?php for ($i = 1; $i <= 30; $i++) { 
            if (file_exists("img/gallery/самон-фото-$i.jpg")) { ?>
            <div class="gallery__item gallery__item"><img src="img/gallery/самон-фото-<?=$i?>.jpg" alt="" class="gallery__img"></div>
        <? }} ?>
            <div class="gallery__item gallery__item-video"><img src="img/gallery/самон-видео-великан.jpg" alt="" class="gallery__img"></div>
            <div class="gallery__item"><img src="img/gallery/самон-следы-великана.jpg" alt="" class="gallery__img"></div>
        </div>
    </section>
    
<?php include 'php/footer.php'; ?>

<div class="gallery-slider slider">
    <div class="slider__close">&times;</div>
    <div class="slider__buttons prev"></div>
    <div class="slider__content">
    </div>
    <div class="slider__buttons next"></div>
</div>

<script src="js/gallery.js?v=2"></script>

</body>
</html>
