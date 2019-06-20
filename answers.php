<!DOCTYPE html>
<html lang="ru">
<head>
    <?php $title = 'Вопросы и ответы'; ?>
    <?php include 'blocks/head.php'; ?>

    <link rel="stylesheet" href="css/answers.min.css?v=1" />
</head>
<body>

<?php include 'blocks/nav.php'; ?>

    <section class="answers section">
        <h3 class="section__title section__title_center">Вопросы и ответы</h3>
        <div class="container">
            <div class="answers__accordion">
                <div class="answers__group">
                    <p class="answers__title">Осуществляете ли вы доставку?</p>
                    <p class="answers__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus cumque non minima est! Debitis accusantium cumque possimus, quisquam dicta libero!</p>
                </div>
                <div class="answers__group">
                    <p class="answers__title">Есть ли у вас бригада укладчиков?</p>
                    <p class="answers__text">Нет, но мы сотрудничаем с бригадой и с удовольствием поделимся с вами контактами.</p>
                </div>
            </div>
            <p class="answers__postscript">Остались вопросы? Позвоните нам по телефону <a href="tel:+79876543210">+7987 654 3210</a></p>
        </div>
    </section>

<?php include 'blocks/footer.php'; ?>

    <script src="js/answers.js?v=1"></script>
</body>
</html>