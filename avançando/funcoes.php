<?php
function sacar(array $conta, float $valor): array
{
    if ($valor > $conta['saldo']) {
        exibeMensagem('Você não pode sacar');
    } else {
        $conta['saldo'] -= $valor;
    }

    return $conta;
}

function depositar(array $conta, float $valor): array
{
    if ($valor > 0) {
        $conta['saldo'] += $valor;
    } else {
        exibeMensagem("Depositos precisam ser positivos");
    }
    return $conta;
}

function exibeMensagem(string $mensagem)
{
    echo $mensagem . '<br>';
}

function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']);

    // echo $conta['titular'] . PHP_EOL;
}

function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular:$titular . Saldo: $saldo</li>";
}
