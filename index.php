<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/assets/css/general.css">
    <title>Jet Go</title>
</head>

<body>
    <div class="global-header-wrapper" id="pageHeader">
        <?php include_once "templates/header-start.php"; ?>
        <?php include_once "templates/header.php"; ?>
    </div>


    <main>
        <div class="container">
            <div class="container-box">
                <div class="title-info">
                    <h1>Доставка ваших грузов</h1>
                    <a class="btn price" href="#">
                        РАСЧИТАТЬ СТОИМОСТЬ
                    </a>
                </div>

                <div class="window">
                    <div class="window-up">
                        <div class="window-circle orange1"></div>
                        <div class="window-circle orange2"></div>
                        <div class="window-circle orange3"></div>
                    </div>
                    <div class="window-down">
                        <h2>Боковая панель</h2>
                        <p>Caлamaлeerem bpatan</p>
                    </div>
                </div>

            </div>

        </div>

        <div class="container-cards">
            <div class="cards">
                <div class="card">
                    <img class="image-card" src="public/assets/image/card-image2.jpg" alt="">
                    <h3>Экспресс доставка</h3>
                    <p>
                        Доставка документов и грузов
                        в кратчайшие сроки.
                    </p>
                </div>
                <div class="card">
                    <img class="image-card" src="public/assets/image/card-image2.jpg" alt="">
                    <h3>VIP перевозки</h3>
                    <p>
                        Персональное сопровождение
                        и максимальная безопасность.
                    </p>
                </div>
                <div class="card">
                    <img class="image-card" src="public/assets/image/card-image2.jpg" alt="">
                    <h3>Отслеживание</h3>
                    <p>
                        Контроль доставки в режиме
                        реального времени.
                    </p>
                </div>
                <div class="card">
                    <img class="image-card" src="public/assets/image/card-image2.jpg" alt="">
                    g
                </div>
            </div>
        </div>

        <section class="services">

            <div class="section-title">
                <p class="mini-title">JET GO SERVICES</p>
                <h2>
                    Логистика нового поколения
                </h2>
            </div>
        </section>


    </main>
    <?php include_once "templates/footer.php"; ?>
</body>
<script src="public/assets/js/general.js"></script>

</html>