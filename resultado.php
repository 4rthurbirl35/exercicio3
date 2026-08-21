<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resumo do Produto</title>
</head>
<body>
    <h2>Resumo do Produto</h2>

    <p><strong>Produto:</strong> <?= htmlspecialchars($nomeProduto) ?></p>
    <p><strong>Valor Total (sem desconto):</strong> R$ <?= number_format($valorTotalOriginal, 2, ',', '.') ?></p>
    <p><strong>Percentual de Desconto:</strong> <?= $percentualDesconto ?>%</p>
    <p><strong>Valor Final com Desconto:</strong> R$ <?= number_format($valorComDesconto, 2, ',', '.') ?></p>

    <?php if ($estoqueBaixo): ?>
        <p style="color: red; font-weight: bold;">
            Atenção: Estoque baixo! Restam apenas <?= $quantidade ?> unidade(s).
        </p>
    <?php endif;?>

    <br>
    <a href="index.html">Cadastrar outro produto</a>
</body>
</html>
