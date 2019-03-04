<?php

if (resolve('/admin')) {
    render('admin/home', 'admin');
} else if (resolve('/admin/pages.*')) {
    include __DIR__ . '/pages/routes.php';
} else if (resolve('/admin/users.*')) {
    include __DIR__ . '/users/routes.php';
} else if (resolve('/admin/upload/image')) {
    $file = $_FILES['file'] ?? null;

    if (!$file) {
        http_response_code(422);
        echo 'Nenhum arquivo enviado';
        exit();
    }

    $allowedTypes = [
        'image/gif',
        'image/jpg',
        'image/jpeg',
        'image/png',
    ];

    if (!in_array($file['type'], $allowedTypes)) {
        http_response_code(422);
        echo 'Arquivo não permitido';
        exit();
    }

    $name = uniqid(rand(), true) . '.' . pathinfo($file['name'], PATHINFO_EXTENSION);

    move_uploaded_file($file['tmp_name'], __DIR__ . '/../public/upload/'.$name);

    echo '/upload/'.$name;
} else {
    http_response_code(404);
    echo "Página não encontrada!";
}
