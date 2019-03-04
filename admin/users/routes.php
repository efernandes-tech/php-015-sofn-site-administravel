<?php

include __DIR__ . '/db.php';

if (resolve('/admin/users')) {

    $users = $users_all();
    render('admin/users/index', 'admin', ['users' => $users]);

} else if (resolve('/admin/users/create')) {

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $users_create();
        header('location: /admin/users');
        die();
    }
    render('admin/users/create', 'admin');

} else if ($params = resolve('/admin/users/(\d+)')) {

    $user = $users_one($params[1]);
    render('admin/users/view', 'admin', ['user' => $user]);

} else if ($params = resolve('/admin/users/(\d+)/edit')) {

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $users_edit($params[1]);
        header('location: /admin/users/'.$params[1]);
        die();
    }
    $user = $users_one($params[1]);
    render('admin/users/edit', 'admin', ['user' => $user]);

} else if ($params = resolve('/admin/users/(\d+)/delete')) {

    $users_delete($params[1]);
    header('location: /admin/users');
    die();

}
