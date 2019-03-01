<?php

if (resolve('/')) {
    echo "Home";
} else if (resolve('/contato')) {
    echo "Página de contato!";
} else {
    echo "Página não encontrada!";
}
