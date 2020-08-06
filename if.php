<?php

$idade = 17;

if ($idade >= 18) {
    echo 'Liberado';
} elseif ($idade >= 16) {
    echo 'Liberado com os Pais';
} else {
    echo 'Barrado';
}
