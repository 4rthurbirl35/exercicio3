<?php

class Produto {
    private string $nome;
    private float $precoUnitario;
    private int $quantidade;

    public function __construct(string $nome, float $precoUnitario, int $quantidade) {
        $this->setNome($nome);
        $this->setPrecoUnitario($precoUnitario);
        $this->setQuantidade($quantidade);
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getPrecoUnitario(): float {
        return $this->precoUnitario;
    }

    public function getQuantidade(): int {
        return $this->quantidade;
    }

    public function setNome(string $nome): void {
        $this->nome = trim($nome);
    }

    public function setPrecoUnitario(float $precoUnitario): void {
        if ($precoUnitario < 0) {
            throw new InvalidArgumentException("O preço unitário não pode ser negativo.");
        }
        $this->precoUnitario = $precoUnitario;
    }

    public function setQuantidade(int $quantidade): void {
        if ($quantidade < 0) {
            throw new InvalidArgumentException("A quantidade não pode ser negativa.");
        }
        $this->quantidade = $quantidade;
    }


    public function calcularValorTotal(): float {
        return $this->precoUnitario * $this->quantidade;
    }

    public function aplicarDesconto(float $percentual): float {
        $total = $this->calcularValorTotal();
        $desconto = $total * ($percentual / 100);
        return $total - $desconto;
    }

    public function estaEmEstoqueBaixo(): bool {
        return $this->quantidade < 5;
    }
}
