<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<head>

    <style>
        table {
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Criar Tabela Dinâmica</h2>
    <form method="post">
        Número de Linhas: <input type="number" name="linhas" min="1" required><br>
        Número de Colunas: <input type="number" name="colunas" min="1" required><br>
        <input type="submit" value="Gerar Tabela">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $linhas = $_POST["linhas"];
        $colunas = $_POST["colunas"];
        
        echo "<table>";
        echo "<tr>";
        $c = 1;
        while ($c <= $colunas) {
            echo "<th>Coluna $c</th>";
            $c++;
        }
        echo "</tr>";
        
        $l = 1;
        while ($l <= $linhas) {
            echo "<tr>";
            $c = 1;
            while ($c <= $colunas) {
                echo "<td>Linha $l, Coluna $c</td>";
                $c++;
            }
            echo "</tr>";
            $l++;
        }
        echo "</table>";
    }
    ?>
</body>
</html>
    
</body>
</html>