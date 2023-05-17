<?php

function gcd($a, $b) {
    return ($b == 0) ? $a : gcd($b, $a % $b);
}

function lcm($a, $b) {
    return $a * $b / gcd($a, $b);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = intval($_POST["num1"]);
    $num2 = intval($_POST["num2"]);
    $num3 = intval($_POST["num3"]);

    $gcd_result = gcd(gcd($num1, $num2), $num3);
    $lcm_result = lcm(lcm($num1, $num2), $num3);
    $sqrt_sum = sqrt($num1 + $num2 + $num3);

    $results = [
        'gcd' => $gcd_result,
        'lcm' => $lcm_result,
        'sqrt_sum' => $sqrt_sum
    ];

    echo json_encode($results);
}

?>