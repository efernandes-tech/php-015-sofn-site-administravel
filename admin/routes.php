<?php

if (resolve('/admin')) {
    render('admin/home', 'admin');



} else if (resolve('/admin/pages')) {
    render('admin/pages/index', 'admin');

} else if (resolve('/admin/pages/create')) {
    render('admin/pages/create', 'admin');

} else if (resolve('/admin/pages/(\d)+')) {
    render('admin/pages/view', 'admin');

} else if (resolve('/admin/pages/(\d)+/edit')) {
    render('admin/pages/edit', 'admin');

} else if (resolve('/admin/pages/(\d)+/delete')) {
    header('location: /admin/pages');



} else {
    http_response_code(404);
    echo "Página não encontrada!";
}
