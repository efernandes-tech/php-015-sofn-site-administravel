<?php

require __DIR__ . '/../admin/pages/db.php';

if (resolve('/contato')) {
    $pages = $pages_all();
    render('site/contato', 'site', compact('pages'));
} else if ($params = resolve('/(.*)')) {
    $pages = $pages_all();
    foreach ($pages as $page) {
        if ($page['url'] == $params[1]) {
            break;
        }
    }
    render('site/page', 'site', compact('pages', 'page'));
}