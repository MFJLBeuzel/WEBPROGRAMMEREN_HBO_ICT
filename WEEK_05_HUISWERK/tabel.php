<?php
echo '<table>';
for ($row = 0; $row < 3; $row++) {
    echo '<tr>';
    for ($col = 0; $col < 3; $col++) {
        echo '<td>rij = ' . $row
        . ' col = '  . $col . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
