<!DOCTYPE html>
<html>
<head>
    <title>Tabela de Produtos</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #333;
            color: white;
        }
        .eletronico {
            background-color: #ffcccc;
        }
        .vestuario {
            background-color: #ccffcc;
        }
        .alimento {
            background-color: #ccccff;
        }
        .limpeza {
            background-color: #ffffcc;
        }
    </style>
</head>
<body>
    <h2>Tabela de Produtos</h2>
    <table>
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Categoria</th>
        </tr>
        <?php
        $produtos = array(
            array("Nome" => "Smartphone", "Preço" => "R$ 1.299,90", "Categoria" => "eletronico"),
            array("Nome" => "Camiseta", "Preço" => "R$ 49,90", "Categoria" => "vestuario"),
            array("Nome" => "Arroz", "Preço" => "R$ 12,50", "Categoria" => "alimento"),
            array("Nome" => "Detergente", "Preço" => "R$ 3,20", "Categoria" => "limpeza"),
            array("Nome" => "Notebook", "Preço" => "R$ 3.499,90", "Categoria" => "eletronico"),
            array("Nome" => "Calça Jeans", "Preço" => "R$ 89,90", "Categoria" => "vestuario"),
            array("Nome" => "Feijão", "Preço" => "R$ 8,75", "Categoria" => "alimento"),
            array("Nome" => "Sabão em Pó", "Preço" => "R$ 15,90", "Categoria" => "limpeza")
        );
        
        foreach ($produtos as $produto) {
            $categoria = strtolower($produto["Categoria"]);
            echo "<tr class='$categoria'>";
            echo "<td>" . $produto["Nome"] . "</td>";
            echo "<td>" . $produto["Preço"] . "</td>";
            echo "<td>" . $produto["Categoria"] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>