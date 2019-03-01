<?php

if (resolve('/')) {
    render('site/home', 'site');
} else if (resolve('/contato')) {
    render('site/contato', 'site');
} else {
    http_response_code(404);
    echo "Página não encontrada!";
}
