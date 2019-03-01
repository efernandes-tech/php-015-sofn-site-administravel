<?php

function resolve($route)
{
    $path = $_SERVER['PATH_INFO'] ?? '/';

    $route = '/^' . str_replace('/', '\/', $route) . '$/';

    if (preg_match($route, $path, $params)) {
        return $params;
    }

    return false;
}

if (resolve('/admin/?(.*)')) {

    require __DIR__ . '/admin/routes.php';

} else if (resolve('/(.*)')) {

    require __DIR__ . '/site/routes.php';

}
