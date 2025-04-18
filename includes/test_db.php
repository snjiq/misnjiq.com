<?php
$conn = pg_connect("host=localhost dbname=php_site  user=postgres password=secure_password");
if (!$conn) {
    die("Ошибка подключения: " . pg_last_error());
}
echo "Подключение к PostgreSQL успешно!";
pg_close($conn);
?>

