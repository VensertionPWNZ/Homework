//math 1
<?php

$x = 0;
if ($x > -2 and $x < 1){
    echo "true";
} else {
    echo"false";
}

//math 2

$x = -3;
if ($x < -2 or $x > 1){
    echo "true";
} else {
    echo"false";
}

//math 3

$x = 2;
if ($x > -2 or  $x > 1 and $x < 3){
    echo "true";
} else {
    echo"false";
}

//math 4

$x1 = -2;
$y1 = 1;
if ($x1 == -2 and $y1 == 1) {
    echo "true";
} else {
    echo "false";
}

//math 5

$x = -3; $y = 0;
if ($x + 2 - 2 * $y<0){
    echo "true";
} else {
    echo"false";
}

$cols = 10;
$rows = 10;
?>
<style>
    table { border: 0; }
    td { padding: 5px; text-align: center; }
</style>

<table>
    <?php
    for ($tr = 1; $tr <= $rows; $tr++)
    {
        echo '<tr>';

        for($td = 1; $td <= $cols; $td++)
        {
            $background = 'white';

            echo '<td style="background-color:', $background, '">', $tr * $td, '</td>';
        }
        echo "</tr>";
    }
    ?>
</table>
