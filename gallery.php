<!DOCTYPE html>
<html lang="ru">
<head>
    <?php $title = 'Фотогалерея'; ?>
    <?php include 'php/head.php'; ?>
    <link rel="stylesheet" href="css/gallery.min.css?v=1" />
</head>
<body>

<?php include 'php/nav.php'; ?>

    <section class="gallery section">
        <h3 class="section__title">Фотогалерея</h3>
        <div class="container row">
        <?php for ($i = 1; $i <= 10; $i++) { 
            if (file_exists("img/gallery/photo-$i.jpg")) { ?>
            <div class="gallery__item"><img src="img/gallery/photo-<?=$i?>.jpg" alt="" class="gallery__img"></div>
        <? }} ?>
            
        </div>
    </section>
    
<?php include 'php/footer.php'; ?>

<div class="gallery-slider slider">
    <div class="slider__close">&times;</div>
    <div class="slider__buttons prev"></div>
    <div class="slider__content">
        <img src="img/gallery/photo-1.jpg" alt="">
    </div>
    <div class="slider__buttons next"></div>
</div>

<script src="js/gallery.js?v=1"></script>

</body>
</html>
