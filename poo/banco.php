<?php

//FUNÇÃO QUE FAZ AUTOLOAD IDENTIFICA AS CLASSES

require_once 'autoload.php';


require_once 'src/Modelo/Conta/Conta.php';
require_once 'src/Modelo/Conta/ContaPoupanca.php';
require_once 'src/Modelo/Conta/ContaCorrente.php';
require_once 'src/Modelo/Endereco.php';
require_once 'src/Modelo/Pessoa.php';
require_once 'src/Modelo/Conta/Titular.php';
require_once 'src/Modelo/CPF.php';


use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\ContaCorrente;


$endereco = new Endereco('Petrópolis', 'um bairro', 'minha rua', '71B');
$samuel = new Titular(new CPF('062.590.131-24'), 'Samuel Germano', $endereco);
$primeiraConta = new ContaPoupanca($samuel);
$primeiraConta->depositar(600);
$primeiraConta->sacar(50);


$anna = new Titular(new CPF('055.600.131-25'), 'Anna Raquel', $endereco);
$segundaConta = new ContaCorrente($anna);
$segundaConta->depositar(500);
$segundaConta->sacar(10);
$segundaConta->transferir(50, $primeiraConta);


var_dump($segundaConta->recuperarSaldo()); //o var_dump serve para imprimir uma instância de uma variavel;
var_dump($primeiraConta->recuperarSaldo()); //o var_dump serve para imprimir uma instância de uma variavel;

echo Conta::recuperaNumeroDeContas();
