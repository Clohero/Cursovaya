<header class="start-header">
    <div class="start-header-box">
        <div class="title">
            <p>JET</p>
            <p>GO</p>
        </div>
        <div class="nav-menu">Меню</div>
        <?php if (!isset($_SESSION['user'])) { ?>
            <div class="nav-menu">
                <a href="public/login.php">Войти</a>
            </div>
            <div class="nav-menu">
                <a href="public/reg.php">Зарегестрироваться</a>
            </div>
        <?php } else { ?>
            <div class="nav-menu">
                <a href="../src/auth/logout.php">Выйти</a>
            </div>
        <?php } ?>
    </div>
</header>