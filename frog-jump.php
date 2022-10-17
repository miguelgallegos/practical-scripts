<?php 

function solution($X, $Y, $D)
{
    $fill = $Y - $X;

    $jumps = $fill / $D;

    // echo "$fill $jumps - " . ((int) round($jumps)) . ' | ';
    return (int) ceil($jumps);
}

$X = 5;
$Y = 105;
$D = 3;

echo solution($X, $Y, $D);