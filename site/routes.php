<?php

if (resolve('/')) {
    render('site/home', 'site');
} else if (resolve('/contato')) {
    render('site/contato', 'site');
} else {
    echo "Página não encontrada!";
}
