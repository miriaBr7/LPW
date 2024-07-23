<?php
        
  // Função para imprimir uma linha da tabela com dados de um instrumento
     function imprimirLinha($instrumento) {
        echo "<tr>";
        echo "<td>" . $instrumento['tipo'] . "</td>";
        echo "<td>" . $instrumento['marca'] . "</td>";
        echo "<td>" . $instrumento['cor'] . "</td>";
        echo "<td>R$ " . number_format($instrumento['preco'], 2, ',', '.') . "</td>";
        echo "</tr>";
        }

        
// Definindo os arrays associativos para os instrumentos
$instrumento1 = array("tipo" => "Violão",
"marca" => "Tagima",
"cor" => "Natural",
"preco" => 1200.00);


$instrumento2 = array("tipo" => "Teclado",
"marca" => "Yamaha",
"cor" => "Preto",
"preco" => 3000.00);


$instrumento3 = array("tipo" => "Guitarra",
"marca" => "Fender",
"cor" => "Sunburst",
"preco" => 2500.00);


$instrumento4 = array("tipo" => "Bateria",
"marca" => "Pearl",
"cor" => "Vermelho",
"preco" => 5000.00);


$instrumento5 = array( "tipo" => "Baixo",
"marca" => "Ibanez",
"cor" => "Branco",
"preco" => 1800.00);


$instrumento6 = array( "tipo" => "Saxofone",
"marca" => "Yanagisawa",
"cor" => "Dourado",
"preco" => 6000.00);


$instrumento7 = array("tipo" => "Violino",
"marca" => "Stradivarius",
"cor" => "Marrom",
"preco" => 10000.00);


$instrumento8 = array("tipo" => "Flauta",
"marca" => "Muramatsu",
"cor" => "Prateado",
"preco" => 2500.00);


$instrumento9 = array( "tipo" => "Piano",
"marca" => "Steinway & Sons",
"cor" => "Preto",
"preco" => 25000.00);


$instrumento10 = array("tipo" => "Harpa",
"marca" => "Salvi",
"cor" => "Madeira Natural",
"preco" => 15000.00);

// Armazenando os arrays em um array maior (matriz)
$instrumentos = array( $instrumento1,$instrumento2,$instrumento3,
$instrumento4, $instrumento5, $instrumento6,$instrumento7,
$instrumento8, $instrumento9,$instrumento10);

// Gerando a tabela HTML
echo "<h2>Dados de Instrumentos Musicais</h2>";
echo "<table>";
echo "<tr>";
echo "<th>Tipo</th>";
echo "<th>Marca</th>";
echo "<th>Cor</th>";
echo "<th>Preço</th>";
echo "</tr>";

//Gerando as linhas com os dados
foreach ($instrumentos as $instrumento) {
    imprimirLinha($instrumento);
}

?>
</tbody>
</table>
</body>
</html>


<html>
<head>
    <meta charset="UTF-8">
    <title>Dados de Instrumentos Musicais</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: burlywood;
        }
    </style>
</head>
<body>


    
