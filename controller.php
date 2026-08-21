<?php
require_once 'Produto.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $precoUnitario = (float) ($_POST['precoUnitario'] ?? 0);
    $quantidade = (int) ($_POST['quantidade'] ?? 0);
    $percentualDesconto = (float) ($_POST['percentualDesconto'] ?? 0);

  
    $produto = new Produto($nome, $precoUnitario, $quantidade);

   
    $nomeProduto = $produto->getNome();
    $valorTotalOriginal = $produto->calcularValorTotal();
    $valorComDesconto = $produto->aplicarDesconto($percentualDesconto);
    
   
    $estoqueBaixo = $produto->estaEmEstoqueBaixo();

    require_once 'resultado.php';
} else {
    header('Location: index.html');
    exit;
}
