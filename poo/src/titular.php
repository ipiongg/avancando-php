<?php


class Titular
{
    private CPF $cpf;
    private string $nome;

    public function __construct(CPF $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->validaNome($nome);
        $this->nome = $nome;
    }

    private function validaNome(string $nome)
    {
        if (strlen($nome) < 5) {
            echo "Nome precisa ter pelo mneos 5 caracteres";
            exit();
        }
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recupera();
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }
}
