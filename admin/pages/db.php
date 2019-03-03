<?php

function pages_get_data($redirectOnError) {
    $title = filter_input(INPUT_POST, 'title');
    $url = filter_input(INPUT_POST, 'url');
    $body = filter_input(INPUT_POST, 'body');

    if (is_null($title) or is_null($url)) {
        flash('Informe os campos de titulo e url', 'error');
        header('location: ' . $redirectOnError);
        die();
    }

    return compact('title', 'url', 'body');
}

$pages_all = function() use ($conn) {
    $result = $conn->query('SELECT * FROM pages');

    return $result->fetch_all(MYSQLI_ASSOC);
};

$pages_one = function($id) use ($conn) {
    $sql = "SELECT * FROM pages WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
};

$pages_create = function()  use ($conn) {
    $data = pages_get_data('/admin/pages/create');

    $sql = "INSERT INTO pages (title, url, body, created, updated)
        VALUES (?, ?, ?, NOW(), NOW())";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sss', $data['title'], $data['url'], $data['body']);

    flash('Criou registro com sucesso!', 'success');

    return $stmt->execute();
};

$pages_edit = function($id) {
    // atualiza uma página.
    flash('Atualizou registro com sucesso!', 'success');
};

$pages_delete = function($id) {
    // remove uma página.
    flash('Removeu registro com sucesso!', 'success');
};
