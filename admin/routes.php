<?php

if (resolve('/admin')) {
    echo "Administração";
} else if (resolve('/admin/pages')) {
    echo "Administração de páginas!";
} else {
    echo "Página não encontrada!";
}
