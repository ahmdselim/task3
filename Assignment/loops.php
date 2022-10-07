<?php
# 1 Write a PHP program to remove duplicates from a sorted list
function duplicates($nums)
{
    $arr = [];
    foreach ($nums as $val) {
        if (empty($arr) || !in_array($val, $arr)) {
            array_push($arr, $val);
        }
    }
    echo "<pre>";
    print_r($arr) . "<br />";
}
duplicates([1, 1, 2, 2, 3, 4, 5, 5]);

# 2 Get the prime number under 1000 and type these numbers in h1
$n = 1000;
for ($i = 0; $i < $n; $i++) {
    if ($i == 0 || $i == 1) {
        continue;
    }
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            break;
        }
    }
    if ($i == $j) {
        echo "<h1>$i</h1>";
    }
}


#3 Write a PHP program to compute the sum of the prime numbers less than 100

$n = 1000;
$arr = [];
for ($i = 0; $i < $n; $i++) {
    if ($i == 0 || $i == 1) {
        continue;
    }
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            break;
        }
    }
    if ($i == $j) {
        // echo "<h1>$i</h1>";
        array_push($arr, $i);
    }
}

# 4 Write a PHP program to find the first non-repeated character in a given string
$string = "abcdea";
$output = [];
$count = strlen($string);

for ($i = 0; $i < $count; $i++) {
    if (substr_count($string, $string[$i]) == 1) {
        array_push($output, $string[$i]);
        break;
    }
}
print_r($output);
