
<?php

$servername = "127.0.0.1";
$dbname = "shop";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password , $dbname);

// Check connection
if (mysqli_connect_errno()) {
    printf("Не удалось подключиться: %s\n", mysqli_connect_error());
    exit();
}

if (!$conn->set_charset("utf8")) {
    printf("Ошибка при загрузке набора символов utf8: %s\n", $conn->error);
    exit();
} else {
//do nothing
}
