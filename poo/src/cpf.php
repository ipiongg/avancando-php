<?php

final class CPF
{

    private string $numero;


    public function __construct(string $numero)
    {
        $this->numero = $numero;
    }

    public function recupera(): string
    {
        return $this->numero;
    }
}
