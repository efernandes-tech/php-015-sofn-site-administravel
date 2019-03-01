<?php

$path = $_SERVER['PATH_INFO'] ?? '/';

if ($path == '/') {
    require __DIR__ . '/site/routes.php';
} else if ($path == '/admin') {
    require __DIR__ . '/admin/routes.php';
} else {
    echo "Página não encontrada!";
}
