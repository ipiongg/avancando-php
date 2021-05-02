<?php

//NAMESPACE É COMO SE FOSSE UM PACOTE
namespace Alura\Banco\Modelo;

abstract class Pessoa

{
    use AcessoPropriedades;

    protected $nome;
    private $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recupera();
    }

    public function validaNome(string $nome)
    {
        if (strlen($nome) < 5) {
            echo "Nome precisa ter pelo mneos 5 caracteres";
            exit();
        }
    }
}
