<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],

    '123.456.885-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],

    '123.456.789-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]

];

$contasCorrentes['123.251.864-12'] = [
    'titular' => 'Samuel',
    'saldo' => 1500
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
    # code...
}
