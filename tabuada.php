<style>
    tr, td {
        border: 1px solid #000;
    }

    table {
        border: 1px solid #000;
        margin-bottom: 20px;
    }
</style>

<?php
    for ($i = 1; $i <= 10; $i++) {
        echo '<table>';

        for ($j = 1; $j <= 10; $j++) {
            echo '<tr>';
                echo '<td>' . $i . ' X ' . $j . ' = ' . ($i * $j) . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    }
?>