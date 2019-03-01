<?php

if (resolve('/admin')) {
    render('admin/home', 'admin');
} else if (resolve('/admin/pages')) {
    render('admin/pages', 'admin');
} else {
    echo "Página não encontrada!";
}
