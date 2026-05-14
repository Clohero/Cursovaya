<?php
require "../../config/connect-db.php";

if (!$conn) {
    echo "<script>
    alert('Ошибка подключения БД');
    window.location.href = '../../public/reg.php';
    </script>";
    exit;
}

$email = trim($_POST['email'] ?? "");
$password = trim($_POST['password'] ?? "");
$full_name = trim($_POST['full_name'] ?? "");
$phone = trim($_POST['phone'] ?? "");

$values = [$email, $password, $full_name, $phone];

foreach ($values as $value) {
    if ($value === "") {
        echo "<script>
            alert('Заполните все поля'); 
            window.location.href = '../../public/reg.php';
            </script>";
        exit;
    }
}

if (mb_strlen($full_name) < 6) {
    echo "<script>
        alert('Нужно указать полное ФИО');
        window.location.href = '../../public/reg.php';
        </script>";
    exit;
}

$check_user = mysqli_query($conn, "SELECT * from users where email = '$email'");
print_r(mysqli_num_rows($check_user));
if ((mysqli_num_rows($check_user)) > 0) {
    echo "<script>
        alert('Такой пользователь уже есть');
        window.location.href = '../../public/reg.php';
        </script>";
    exit;
}

$sql = "INSERT INTO `users`(`password`,`email`, `full_name`, `phone`) 
        VALUES ('$password','$email','$full_name','$phone')";

$add_user = mysqli_query($conn, $sql);

if ($add_user) {
    echo "<script>
            alert('Регистрация выполнена успешно');
            window.location.href = '../../index.php';
            </script>";

} else {
    echo "<script>
        alert('Пользователя не удалось добавить');
        window.location.href = '../../public/reg.php';
        </script>";
}

