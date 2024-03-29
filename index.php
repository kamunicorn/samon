<!DOCTYPE html>
<html lang="ru">
<head>
    <?php include 'php/head.php'; ?>

    <link rel="stylesheet" href="css/main.min.css?v=3" />
</head>
<body>
    
<?php include 'php/nav.php'; ?>

    <main class="main">
        <div class="main__slider slider">
            <div class="slider__item slider__first active">
                <div class="container">
                    <h1 class="main__title">Изготовление изделий из&nbsp;бетона на&nbsp;Камчатке по&nbsp;технологии «Мрамор&nbsp;из&nbsp;бетона»:</h1>
                    <p class="main__subtitle">тротуарной плитки,
                        <br>бетонопаркета,
                        <br>облицовочного камня,
                        <br>сборно-разборных цветников,
                        <br>накладных ступеней, 
                        <br>бордюров,
                        <br>водостоков и др.</p>
                </div>
            </div>
            <div class="slider__item slider__cooperation">
                <div class="container">
                    <h2 class="main__title">Взаимовыгодное сотрудничество с&nbsp;юридическими лицами.</h2>
                </div>
            </div>
            <div class="slider__item slider__payment">
                <div class="container">
                    <h2 class="main__title">Для физических лиц - беспроцентная рассрочка в&nbsp;зимний период времени, бесплатное хранение продукции в&nbsp;нашем&nbsp;складе до&nbsp;весны.<sup>*</sup></h2>
                    <p class="main__subtitle"><sup>*</sup> Рассрочку предоставляет ИП&nbsp;Клюшникова&nbsp;И.В.</p>
                </div>
            </div>
            <div class="slider__dots">
                <div class="slider__dots-item active"></div>
                <div class="slider__dots-item"></div>
                <div class="slider__dots-item"></div>
            </div>
        </div>
    </main>

    <section class="about section">
        <div class="container">
            <h3 class="section__title">О технологии</h3>
            <p class="about__text">В данной технологии применяется метод гравитационно - катышного замеса. А именно: воздух из бетонной смеси, сделанной по особому рецепту, удаляется в модифицированном бетоносмесителе; на вибростол замес попадает в состоянии, близком к твердому, он замешан до высокой плотности и освобожден от воздушных пор. Во время приготовления плотного бетонного замеса формируются катыши. Попадая в форму для бетона на вибростоле, они начинают таять прямо на глазах, заполняя всю поверхность. Состав больше напоминает пластилин, нежели раствор. У него плотная структура, в которой абсолютно отсутствует воздух и которая не пропускает воду. При таком замесе, изделия обладают высокими физико-техническими характеристиками: сильная морозостойкость, практически нулевая истираемость и водопоглощение, высокая газонепроницаемость и сопротивляемость проникновению хлоридов.</p>
        </div>
    </section>

    <section class="advantages section">
        <div class="container">
            <h3 class="section__title">Наши преимущества</h3>
            <p class="advantages__text">- Все работы по изготовлению продукции производятся с соблюдением температурного режима и уровня влажности в хорошо отапливаемом цеху, что позволяет нам не останавливать производственные процессы даже в зимний период. Более того, именно в этот период мы можем предоставить вам, нашим уважаемым покупателям, уникальную возможность приобрести все необходимое для благоустройства своих дачных участков с минимальным ущербом для своего бюджета. Так, при заказе нашей продукции в осенне-зимний период, мы предоставляем вам беспроцентную рассрочку<sup> *</sup> до того момента, когда на Камчатке наконец-то растает снег, и вы с удовольствием сможете заняться украшением своего участка. Хранение уже готовой продукции на нашем складе для вас будет абсолютно бесплатно до весны.</p>
            <p class="advantages__text">- Также, вы можете у нас заказать доставку до места назначения. Цены на доставку нашей продукции нашим транспортом значительно отличаются от средних цен на транспортные расходы по Камчатскому краю.</p>
            <p class="advantages__text">- Мы стараемся найти индивидуальный подход к каждому покупателю, например подбираем цвет, который бы подходил к общему дизайну вашей территории. Сразу, и без обмана оговариваем сроки выполнения работ. А самое главное, мы предоставляем гарантию на время укладки, так, например, если при укладке плитка колется или ломается, то мы бесплатно меняем ее на другую.</p>
            <p class="advantages__text">- Наша продукция изготавливается только из качественных компонентов. Мы используем портландцемент М-500, пигменты и специальные добавки для бетона из Южной Кореи. Причем добавки для бетона подобраны с учетом именно наших климатических условий. Они еще добавляют нашей продукции морозостойкость и снижают водопоглощение. Все ингредиенты всегда закладываются в определенных пропорциях, согласно технологии, абсолютно всё проходит через весы.</p>
            <p class="advantages__payment-ps">* Рассрочку предоставляет ИП&nbsp;Клюшникова&nbsp;И.В.</p>
        </div>
    </section>

    <section class="catalog section">
        <div class="container">
            <h3 class="section__title">Каталог</h3>
            <div class="products-wrap">
            <? for ($i = 1; $i <= 4; $i++) { ?>
                <div class="catalog__item products__card" style="background-image: url('/img/products/product-<?=$i?>.jpg')"><a class="products__card-link" href="/catalog.php"></a></div>
                <?}?>
            </div>
            <p><a class="products__look-all" href="/catalog.php">Смотреть весь каталог</a></p>
        </div>
    </section>

    <section class="gallery section">
        <div class="container">
            <h3 class="section__title">Фотогалерея</h3>
            <div class="products-wrap">
            <? for ($i = 1; $i <= 4; $i++) { ?>
                <div class="gallery__item products__card" style="background-image: url('/img/gallery/самон-фото-<?=$i?>.jpg')"><a class="products__card-link" href="/gallery.php"></a></div>
            <?}?>
            </div>
            <p><a class="products__look-all" href="/gallery.php">Смотреть все фото</a></p>
        </div>
    </section>
    
    <section class="section sertificates">
        <div class="container">
            <h3 class="section__title">Сертификаты</h3>
            <a href="img/сертификат.jpg" class="sertificates__item" target="_blank" title="Открыть сертификат"><img src="img/сертификат.jpg" alt="Сертификат соответствия"></a>
        </div>
    </section>

<?php include 'php/footer.php'; ?>

    <script src="js/main.js?v=1"></script>
</body>
</html>