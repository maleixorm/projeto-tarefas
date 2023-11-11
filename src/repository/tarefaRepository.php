<?php

class tarefaRepository
{
    private int $id;
    private string $nome;
    private string $descricao;

    public function __construct(int $id, string $nome, string $descricao)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->descricao = $descricao;
    }
}