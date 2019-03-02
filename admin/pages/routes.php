<?php

include __DIR__ . '/db.php';

if (resolve('/admin/pages')) {

    $pages = $pages_all();
    render('admin/pages/index', 'admin', ['pages' => $pages]);

} else if (resolve('/admin/pages/create')) {

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $pages_create();
        return header('location: /admin/pages');
    }
    render('admin/pages/create', 'admin');

} else if ($params = resolve('/admin/pages/(\d+)')) {

    $page = $pages_one($params[1]);
    render('admin/pages/view', 'admin', ['page' => $page]);

} else if ($params = resolve('/admin/pages/(\d+)/edit')) {

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $pages_edit($params[1]);
        return header('location: /admin/pages/'.$params[1]);
    }
    render('admin/pages/edit', 'admin');

} else if ($params = resolve('/admin/pages/(\d+)/delete')) {

    $pages_delete($params[1]);
    return header('location: /admin/pages');

}
