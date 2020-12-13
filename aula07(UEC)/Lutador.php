<?php

class Lutador
{
    private String $nome, $nacionalidade;
    private int $idade, $altura, $peso;
    private String $categoria;
    private int $vitorias, $derrotas, $empates;

    public function __construct(string $nome, string $nacionalidade, int $idade, int $altura, float $peso, int $vitorias, int $derrotas, int $empates)
    {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }

    public function apresentar()
    {
        echo "<p>----------------------</p>";
        echo "<p style='color: blue; font-size: larger; font-family: sans-serif'>CHEGOU A HORA! O lutador {$this->getNome()} ";
        echo "veio diretamente de {$this->getNacionalidade()}, ";
        echo "tem {$this->getIdade()} anos, {$this->getAltura()} m de altura e pesa {$this->getPeso()} Kg.";
        echo "<br>Ele tem {$this->getVitorias()} vitorias, {$this->getDerrotas()} derrotas e {$this->getEmpates()} empates.";
        echo "<p>----------------------</p>";
    }

    public function status()
    {
        echo "<p>----------------------</p>";
        echo "<p style='color: darkgoldenrod; font-size: medium'>{$this->getNome()} é um peso {$this->getCategoria()} ";
        echo "e já ganhou {$this->getVitorias()} vezes, perdeu {$this->getDerrotas()} e empatou {$this->getEmpates()}.";
        echo "<p>----------------------</p>";
    }

    public function ganharLuta()
    {
        $this->setVitorias($this->getVitorias() + 1);
    }

    public function perderLuta()
    {
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    public function empatarLuta()
    {
        $this->setEmpates($this->getEmpates() + 1);
    }

    public function getNome(): string
    {
        return $this->nome;
    }
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getNacionalidade(): string
    {
        return $this->nacionalidade;
    }
    public function setNacionalidade(string $nacionalidade): void
    {
        $this->nacionalidade = $nacionalidade;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }
    public function setIdade(int $idade): void
    {
        $this->idade = $idade;
    }

    public function getAltura(): int
    {
        return $this->altura;
    }
    public function setAltura(int $altura): void
    {
        $this->altura = $altura;
    }

    public function getPeso(): float
    {
        return $this->peso;
    }
    public function setPeso(float $peso): void
    {
        $this->peso = $peso;
        $this->setCategoria();
    }

    public function getCategoria(): string
    {
        return $this->categoria;
    }
    private function setCategoria(): void
    {
        if($this->getPeso() < 52.2) $this->categoria = "Inválido";
        else if($this->getPeso() <= 70.3) $this->categoria = "Leve";
        else if($this->getPeso() <= 83.9) $this->categoria = "Médio";
        else if($this->getPeso() <= 120.2) $this->categoria = "Pesado";
        else $this->categoria = "Inválido";
    }

    public function getVitorias(): int
    {
        return $this->vitorias;
    }
    public function setVitorias(int $vitorias): void
    {
        $this->vitorias = $vitorias;
    }

    public function getDerrotas(): int
    {
        return $this->derrotas;
    }

    public function setDerrotas(int $derrotas): void
    {
        $this->derrotas = $derrotas;
    }

    public function getEmpates(): int
    {
        return $this->empates;
    }
    public function setEmpates(int $empates): void
    {
        $this->empates = $empates;
    }
}