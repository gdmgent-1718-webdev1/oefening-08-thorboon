<?php

$title = 'Rij van Fibonacci';

function fibonacci($max = 514229, int $x = 0, int $y = 1) {
    echo $x;
    if ($max < $y) {
        echo ' &hellip;';
        return;
    } else {
        echo ', ';
        return fibonacci($max, $y, $x + $y);
    }
}
?>
<!DOCTYPE html>
<meta charset="UTF-8">
<title><?=$title ?></title>

<div class="container">
    <h1><?=$title ?></h1>
    <p><?=fibonacci() ?></p>

</div>