<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco(
    'Petropolis',
    'bairro qualquer',
    'Minha Rua',
    '71b'
);

$outroEndereco = new Endereco(
    'Rio',
    'Centro',
    'Uma rua aí',
    '50'
);


echo $umEndereco . PHP_EOL;
echo $outroEndereco;