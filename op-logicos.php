<?php

$idade = 18;
$fantasia = true;

// ! = NOT (Não)

echo '<h3>Porta Lógica AND (E)</h3>';

if ($idade >= 18 && $fantasia) {
    echo 'Liberado';
} else {
    echo 'Barrado';
}

echo '<hr/>';

echo '<h3>Porta Lógica OR (OU)</h3>';

if ($idade >= 18 || $fantasia) {
    echo 'Liberado';
} else {
    echo 'Barrado';
}
