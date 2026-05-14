<?php

require "../../config/connect-db.php";

if (!$conn) {
    echo "<script>
    alert('Ошибка подключения БД');
    window.location.href = '../../public/login.php';
    </script>";
    exit;
}

$email = $_POST['email'] ?? "";
$password = $_POST['password'] ?? "";

$check_user = mysqli_query($conn, "SELECT * FROM users WHERE `email` = '$email'");

if (mysqli_num_rows($check_user) > 0) {
    $user = mysqli_fetch_assoc($check_user);
    if ($password == $user['password']) {
        session_start();

        $_SESSION['user'] = $user['email'];
        $_SESSION['id'] = $user['id'];

        $role = $user['role'] == 'admin' ? "admin" : "";

        if ($role == 'admin') {
            echo "<script>
                    alert('вы успешно вошли в админ панель');
                    window.location.href = '../admin/index.php';
                    </script>";
            exit;
        }else{
            echo "<script>
                    alert('вы успешно вошли в аккаунт');
                    window.location.href = '../../index.php';
                    </script>";
            exit;
        }
    } else {
        echo "<script>
    alert('Пароль не верный');
    window.location.href = '../../public/login.php';
    </script>";
        exit;
    }
} else {
    echo "<script>
    alert('Пользователь не найден');
    window.location.href = '../../public/login.php';
    </script>";
    exit;
}