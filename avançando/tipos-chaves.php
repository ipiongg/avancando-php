<?php

$array = [
    1 => 'a',
    '1' => 'b',
    1.5 => 'c',
    true => 'd',
];

// php só trabalha com array associativo do tipo inteiro ou string

foreach ($array as $item) {
    echo $item . PHP_EOL;
    # code...
}
