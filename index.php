<?php
// Автозагрузчик: файл класса лежит в classes/ и называется так же, как класс
spl_autoload_register(function (string $class): void {
    $path = __DIR__ . '/classes/' . $class . '.php';
    if (file_exists($path)) {
        require $path;
    }
});

$user    = new User('Иван', 'ivan@example.com');   // подключится classes/User.php
$book    = new Product('Книга', 500);              // classes/Product.php
$pen     = new Product('Ручка', 50.5);
$order   = new Order($user, [$book, $pen]);        // classes/Order.php

echo 'Пользователь: ' . $user->getInfo() . PHP_EOL;
echo 'Товар 1: ' . $book->getInfo() . PHP_EOL;
echo 'Товар 2: ' . $pen->getInfo() . PHP_EOL;
echo 'Итого по заказу: ' . number_format($order->getTotal(), 2, '.', ' ') . ' руб.' . PHP_EOL;
