<!DOCTYPE html>
<html lang="ru">
<head>
    <?php $title = 'Контакты'; ?>
    <?php include 'php/head.php'; ?>

    <link rel="stylesheet" href="css/contact.min.css?v=2" />
</head>
<body>

<?php include 'php/nav.php'; ?>

    <section class="contact section">
        <h3 class="section__title section__title_center">Контакты</h3>
        <div class="container row">
            <div class="contact__info">
                <p><b>Индивидуальный Предприниматель Клюшникова&nbsp;Ирина&nbsp;Викторовна</b></p>
                <p><b>ОГРНИП </b>317410100017585</p>
                <p><b>ИНН </b>410112484413</p>
                <p><b>Фактический адрес: </b>г.&nbsp;Петропавловск&#8209;Камчатский, пр&#8209;т&nbsp;Победы&nbsp;109</p>
                <p><b><a title="Позвонить" href="tel:+79146287599">+7914 628 7599</a></b> (сотовый)</p>
                <p><b><a title="Позвонить" href="tel:+79841695921">+7984 169 5921</a></b> (whatsapp)</p>
                <p><b><a title="Позвонить" href="tel:414161">41-41-61</a></b></p>
                <p><b><a title="Написать" href="mailto:kpk-samon@yandex.ru">kpk-samon@yandex.ru</a></b></p>
            </div>
            <div class="contact__map" id="map">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Abfe4f3e63cd14d474590447834899d2f9c7cc4a83cbdfe3ebc3251cac460afa1&amp;width=100%25&amp;height=450&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </div>
    </section>

<?php include 'php/footer.php'; ?>

</body>
</html>