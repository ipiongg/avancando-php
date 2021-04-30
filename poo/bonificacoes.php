<?php

require_once 'autoload.php';


// use Alura\Banco\Service\ControladorDeBonificacao;
// use Alura\Banco\Modelo\CPF;
// use Alura\Banco\Modelo\Funcionario\Funcionario;

use Alura\Banco\Modelo\Funcionario\{Diretor, Gerente, Desenvolvedor};
use Alura\Banco\Service\ControladorDeBonificacao;
use Alura\Banco\Modelo\CPF;


$umFuncionario = new Desenvolvedor(
    'Vinicius Dias',
    new CPF('123.456.789-10'),
    'Desenvolvedor',
    1000
);
$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente(
    'Patricia',
    new CPF('987.654.321-10'),
    'Gerente',
    3000
);

$umDiretor = new Diretor(
    'Ana Paula', new CPF('123.951.789-11'),
    'Diretor', 5000
);

$controlador = new ControladorDeBonificacao();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);


echo $controlador->recuperaTotal();