<?php

require_once 'src/conta.php';
require_once 'src/endereco.php';
require_once 'src/titular.php';
require_once 'src/cpf.php';


$endereco = new Endereco('Petrópolis', 'um bairro', 'minha rua', '71B');
$samuel = new Titular(new CPF('062.590.131-24'), 'Samuel Germano', $endereco);
$primeiraConta = new Conta($samuel);

echo $primeiraConta->depositar(500);
echo $primeiraConta->sacar(50);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;

var_dump($primeiraConta); //o var_dump serve para imprimir uma instância de uma variavel;

echo Conta::recuperaNumeroDeContas();
