<?php

// React By Maximilian

function solution($n)
{
    $str = decbin($n);
    $str = trim($str, '0');
    $startIdx = strpos($str, "1");
    $endIdx = strrpos($str, "1");

    if (false === $startIdx || false === $endIdx || 0 == $endIdx) {
        return 0;
    }

    $str = str_replace('1', ',', $str);

    $str = explode(',', $str);

    $len = 0;
    foreach ($str as $value) {
        $len1 = strlen($value);
        
        if (0 == $len1) {
            continue;
        }

        if ($len1 > $len) {
            $len = $len1;
        }
    }

    return $len;
}

foreach ([1,6, 2, 147, 483, 647] as $v) {
    echo $v . ' -> ' . decbin($v) . ' -> ' . solution($v);
    echo "\n";
}
