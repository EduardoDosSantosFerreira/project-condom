<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Condomínio</title>
</head>
<body>
    <h1>Calculadora de Condomínio</h1>
    
    <form action="" method="POST">
        Nome do proprietário: <input type="text" name="proprietario" required><br>
        Número do apartamento: <input type="number" name="apartamento" required><br>
        Tipo de animal de estimação:
        <select name="animal">
            <option value="gato">Gato</option>
            <option value="papagaio">Papagaio</option>
            <option value="cao">Cão</option>
            <option value="nenhum">Nenhum</option>
        </select><br>
        <input type="submit" value="Calcular">
    </form>
    
    <?php
    // Verifica se foram enviados valores 
    if (isset($_POST['proprietario']) && isset($_POST['apartamento']) && isset($_POST['animal'])) {
        // Obtém os valores do formulário
        $proprietario = $_POST['proprietario'];
        $apartamento = intval($_POST['apartamento']);
        $animal = $_POST['animal'];
        
        // Valor base do condomínio
        $valorBase = 350;
        
        // Taxa extra de acordo com o tipo de animal
        $taxas = [
            'gato' => 30,
            'papagaio' => 12,
            'cao' => 50,
            'nenhum' => -20
        ];
        
        // Calcula o valor total do condomínio
        $taxaExtra = $taxas[$animal];
        $valorTotal = $valorBase + $taxaExtra;
        
        // Exibe o resultado
        echo "<p>Proprietário: $proprietario</p>";
        echo "<p>Apartamento: $apartamento</p>";
        echo "<p>Tipo de animal: $animal</p>";
        echo "<p>Valor a pagar de condomínio: R$ " . number_format($valorTotal, 2, ',', '.') . "</p>";
    }
    ?>
</body>
</html>
