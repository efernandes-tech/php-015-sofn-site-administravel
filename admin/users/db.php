<?php

function users_get_data($redirectOnError) {
    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');

    if (is_null($email)) {
        flash('Informe o campo email', 'error');
        header('location: ' . $redirectOnError);
        die();
    }

    return compact('email', 'password');
}

$users_all = function() use ($conn) {
    $result = $conn->query('SELECT * FROM users');

    return $result->fetch_all(MYSQLI_ASSOC);
};

$users_one = function($id) use ($conn) {
};

$users_create = function() use ($conn) {
    $data = users_get_data('/admin/users/create');

    if (is_null($data['password'])) {
        flash('Informe o campo senha', 'error');
        header('location: /admin/users/create');
        die();
    }

    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (email, password, created, updated)
        VALUES (?, ?, NOW(), NOW())";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss', $data['email'], $data['password']);

    flash('Criou registro com sucesso!', 'success');

    return $stmt->execute();
};

$users_edit = function($id) use ($conn) {
};

$users_delete = function($id) use ($conn) {
    $sql = "DELETE FROM users WHERE id=?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);

    flash('Removeu registro com sucesso!', 'success');

    return $stmt->execute();
};
