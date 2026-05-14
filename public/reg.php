<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="assets/css/reg-login.css">
</head>

<body>
    <nav class="navbar">
        <div class="logo-and-titlename">
            <a class="titlename" href="../../index.php">JET.GO</a>
        </div>
    </nav>
    <main class="container">
        <div class="panel">
            <div class="title-and-img">
                <h1 class="title-page">Регистрация</h1>
                <img class="logo" src="../public\assets\image\face-control.png" alt="">
            </div>
            <form method="POST" action="../src/auth/reg-db.php">
                <div class="label-input">
                    <label for="email">Эллектронная почта</label>
                    <input type="text" name="email" placeholder="введите ваш email">
                </div>
                <div class="label-input">
                    <label for="password">Пароль</label>
                    <input type="password" name="password" placeholder="введите пароль (больше 5 символов)">
                </div>
                <div class="label-input">
                    <label for="full_name">Полное имя</label>
                    <input type="text" name="full_name" placeholder="Иванов Иван Иванович">
                </div>
                <div class="label-input">
                    <label for="phone">Номер телефона</label>
                    <input type="text" name="phone" placeholder="8(XXX)XXX-XX-XX">
                </div>
                <div class="button-box">
                    <button type="submit" class="link reg-link">Зарегестрироваться</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>