<?php

// check all paired
// if paired and excess, don't count on singles

// function solution($A)
// {
//     $main = [];
//     $pair = [];

//     foreach ($A as $v) {
//         if (!in_array($v, $main)) {
//             $main[] = $v;
//             continue;
//         }

//         if (in_array($v, $main) && !in_array($v, $pair)) {
//             $pair[] = $v;
//         }

//     }

//     $diff = array_diff($main, $pair);

//     return array_shift($diff);
// }


// function solution($A)
// {
//     if (1 == count($A)) {
//         return = $A[0];
//     }

//     $counts = [];
//     foreach ($A as $value) {
//         if (!isset($counts[$value])) {
//             $counts[$value] = 1;
//         } else {
//             $counts[$value] ++;
//         }
//     }

//     $my = null;
//     foreach ($counts as $k => $v) {
//         if ($v == 1) {
//             $my = $k;
//             break;
//         }
//     }

//     return $my;
// }

// function solution($A)
// {
//     $counts = [];
//     foreach ($A as $value) {
//         if (!in_array($value, $counts)) {
//             $counts[] = $value;
//             continue;
//         }

//         $delIdx = array_search($value, $counts);
//         unset($counts[$delIdx]);
//     }

//     return array_shift($counts);
// }

function solution($A)
{
    if (1 == count($A)) {
        return array_shift($A);
    }

    sort($A);

    $current = null;

    $c = 1;

    if (0 == count($A) % 2) {
        return;
    }

    for ($i = 0; $i < count($A); $i ++) {
        if (isset($A[$i + 1]) && $A[$i] == $A[$i + 1]) {
            $i ++;
            continue;
        }

        return $A[$i];
    }
}

$N = [99, 88, 77, 11, 11, 77, 88];
$s = solution($N);

echo "<pre>" . print_r($s, true ) . "</pre>";