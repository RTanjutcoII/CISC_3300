<?php

$array = [
    'key1' => '1',
    'key2' => '2',
    'key3' => '3'
];

foreach ($array as $key => $value) {
    echo "Key: " .  $key . "<br>Value: " . $value . "<br><br>";
}

function question7(int $userNum, int $optionalNum = 7) : int {
    return $userNum + $optionalNum;
}

echo "Question 7's Output: " . question7(0) . "<br>";