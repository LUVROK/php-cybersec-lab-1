<?php

// Массив маршрутов
$routes = [
    '/' => 'home',
    '/about' => 'about',
    '/contact' => 'contact',
];

// Получаем текущий путь
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Функция для обработки маршрута
function handleRoute($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        $page = $routes[$uri];
        include __DIR__ . "/{$page}.php";
    } else {
        include __DIR__ . "/404.php";
    }
}

// Обрабатываем маршрут
handleRoute($requestUri, $routes);


