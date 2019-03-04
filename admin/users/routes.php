<?php

include __DIR__ . '/db.php';

if (resolve('/admin/users')) {

    $users = $users_all();
    render('admin/users/index', 'admin', ['users' => $users]);

} else if (resolve('/admin/users/create')) {

    render('admin/users/create', 'admin');

} else if ($params = resolve('/admin/users/(\d+)')) {

    render('admin/users/view', 'admin');

} else if ($params = resolve('/admin/users/(\d+)/edit')) {

    render('admin/users/edit', 'admin');

} else if ($params = resolve('/admin/users/(\d+)/delete')) {

    header('location: /admin/users');
    die();

}