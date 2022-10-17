<?php 

function solution($N, $A)
{   
    // $counters = array_fill(0, $N, 0);
    $counters = new SplFixedArray($N);
    // for ($i = 0; $i < $N; $i++) {
    //     $counters[$i] = 0;
    // }
    // $counters = array_pad([], $N, 0);
    $max = 0;

    foreach ($A as $i) {
        // echo "$i " . ($i - 1);
        // echo "\n";
        // if ($i + 1 > $N) {
        if ($i > $N) {
            $counters = res($counters, $max);
            // echo " $i RESET!! max $max ";
        } else {
            $counters[$i - 1] = $counters[$i - 1] + 1;

            if ($counters[$i - 1] > $max) {
                $max = $counters[$i - 1];
            }

            // echo " INCREASE $i ($max) ";
        }

        // echo "<pre>" . print_r($counters, true ) . "</pre>";
        // echo "\n";
    }

    for ($i=0; $i < $counters->getSize(); $i++) { 
        if ($counters[$i] == null) {
            $counters[$i] = 0;
        }
    }


    return $counters->toArray();
}

function res($am, $value)
{
    // return array_fill(0, count($am), $value);
    $am = new SplFixedArray(count($am));
    for ($i = 0; $i < $am->getSize(); $i++) {
        if ($value != $am[$i]) {
            $am[$i] = $value;
        }
    } 
    
    return $am;   
    // return array_pad([], count($am), $value);
}

// $A = [3, 4, 4, 6, 1, 4, 4];
// $N = 1;

$A = [6, 6, 6, 6, 6, 6];
$N = 5;


$cs = solution($N, $A);

echo "<pre>" . print_r($cs, true ) . "</pre>";

/*

You are given N counters, initially set to 0, and you have two possible operations on them:

increase(X) − counter X is increased by 1,
max counter − all counters are set to the maximum value of any counter.
A non-empty array A of M integers is given. This array represents consecutive operations:

if A[K] = X, such that 1 ≤ X ≤ N, then operation K is increase(X),
if A[K] = N + 1 then operation K is max counter.
For example, given integer N = 5 and array A such that:

    A[0] = 3
    A[1] = 4
    A[2] = 4
    A[3] = 6
    A[4] = 1
    A[5] = 4
    A[6] = 4
the values of the counters after each consecutive operation will be:

    (0, 0, 1, 0, 0)
    (0, 0, 1, 1, 0)
    (0, 0, 1, 2, 0)
    (2, 2, 2, 2, 2)
    (3, 2, 2, 2, 2)
    (3, 2, 2, 3, 2)
    (3, 2, 2, 4, 2)
The goal is to calculate the value of every counter after all operations.

Write a function:

function solution($N, $A);

that, given an integer N and a non-empty array A consisting of M integers, returns a sequence of integers representing the values of the counters.

Result array should be returned as an array of integers.

For example, given:

    A[0] = 3
    A[1] = 4
    A[2] = 4
    A[3] = 6
    A[4] = 1
    A[5] = 4
    A[6] = 4
the function should return [3, 2, 2, 4, 2], as explained above.

Write an efficient algorithm for the following assumptions:

N and M are integers within the range [1..100,000];
each element of array A is an integer within the range [1..N + 1].

 */