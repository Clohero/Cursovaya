<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
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
                <h1 class="title-page">Авторизация</h1>
                <img class="logo" src="../public\assets\image\face-control.png" alt="">
            </div>
            <form method="POST" action="../src/auth/login-db.php">
                <div class="label-input">
                    <label for="email">Электронная почта</label>
                    <input type="email" class="" name="email">
                </div>
                <div class="label-input">
                    <label for="password">Пароль</label>
                    <input type="password" class="" name="password">
                </div>
                <div class="button-box">
                    <button type="submit" class="link">Войти</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>