<?php

// in seconds...
const MIN = 60 ;
const HOUR = MIN * 60;
const DAY = HOUR * 24;
const WEEK = DAY * 7;

function solution($X) {
    $out = "";
    $weeks = 0;
    $holds = [];
    if ($X % WEEK != 0) {
        $weeks = (int) ($X / WEEK);
        $X = ($X % WEEK);

        if ($weeks > 0) {
            $holds['w'] = $weeks;
        }
    }

    $days = 0;
    if ($X % DAY != 0) {
        $days = (int) ($X / DAY);
        $X = ($X % DAY);

        if ($days > 0) {
            $holds['d'] = $days;
        }
    }

    echo " NEW $X ";
    echo "\n";

    // $weeks = ($X / WEEK) > 0 ? round($X / WEEK) : 0;

    echo " weeks = $weeks " ;
    echo "-- left " . ($X % WEEK);
    echo "\n";

    // left??? instead of X

    // $days = ($X / DAY) > 0 ? round($X / DAY) : 0;

    echo " days = $days " ;
    echo "-- left " . ($X % DAY);
    echo "\n";


    // $hours = ($X / HOUR) > 0 ? round($X / HOUR) : 0;

    $hours = 0;
    if ($X % HOUR != 0) {
        $hours = (int) ($X / HOUR);
        $X = ($X % HOUR);

        if ($hours > 0) {
            $holds['h'] = $hours;
        }   
    }


    echo " hours = $hours " ;
    echo "-- left " . ($X % HOUR);
    echo "\n";

    $minutes = 0;
    if ($X % MIN != 0) {
        $minutes = (int) ($X / MIN);
        $X = ($X % MIN);

        if ($minutes > 0) {
            $holds['m'] = $minutes;        
        }
    }

    $seconds = 0;
    if ($X % MIN != 0) {
        $seconds = ($X % MIN);
        if ($seconds > 0) {
            $holds['s'] = $seconds;  
        }
    }

    $keys = array_keys($holds);

    if (1 == count ($holds)) {
        return sprintf("%d%s", $holds[$keys[0]], $keys[0]);
    }

    if (2 == count($holds)) {
        $out = "";
        foreach ($holds as $key => $value) {
            $out .= $value . $key;
        }

        return $out;
    }

    return sprintf("%d%s%d%s", $holds[$keys[0]], $keys[0], $holds[$keys[1]] + 1, $keys[1]);

    echo "<pre>" . print_r($holds, true ) . "</pre>";

    echo " minutes: $minutes ";
    echo "\n";
    echo "seconds: $seconds ";
    echo "\n";


    // echo " minutes = $minutes " ;
    // echo "-- left " . ($X % MIN);
    // echo "\n";




    return $out;
}

echo "SOL: ";
echo "\n -- ";
// $X = 604901;
$X = 8913605;
echo solution($X);
echo " -- ";
