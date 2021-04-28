<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta

{
    private Titular $titular;
    protected float $saldo = 0;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
        //acessa os atributos státicos da classe

    }

    public  function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function sacar(float $valorAsacar): void
    {
        $tarifaSaque = $valorAsacar * $this->percentualTarifa();
        $valorAsacar = $valorAsacar + $tarifaSaque;

        if ($valorAsacar > $this->saldo) {
            echo "Saldo indisponível";
            //this é a referencia para o objeto que chamou o metodo
            //No código $umaConta->depositar(500), 
            //dentro do método depositar, $this possui a referência para o mesmo 
            //objeto que $umaConta.
            return;
        }
        $this->saldo -= $valorAsacar;
    }

    public function depositar(float $valorDepositar): void
    {
        if ($valorDepositar < 0) {
            echo "Depositos precisam ser positivos";
            return;
        }
        $this->saldo += $valorDepositar;
    }


    public function recuperarSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }

    //um metodo stático não é possivel mudar.

    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

    abstract protected function percentualTarifa(): float;
}
