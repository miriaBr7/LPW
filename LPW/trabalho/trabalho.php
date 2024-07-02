
<?php

    //Lista

    $arrJogador = ["Tafarel", "Jorginho", "Aldair", "Márcio Santos", "Branco", "Mauro Silva", "Dunga", "Mazinho" , "Zinho" , "Romário" , "Bebeto"];
    $arrNumero = ["1", "2", "13", "15", "6", "5", "8", "17", "9", "11", "7"];

    //Função

function desenhaLinha($numero, $nome, $corfundo) {
    echo "<tr style = 'background-color: $corfundo'>";
    echo "<td>" . $numero . "</td>";
    echo "<td>" . $nome . "</td>";
    echo "</tr>";

}
    //Tabela em HTML
    
echo "<h2>Seleção Brasileira de Futebol - 1994 </h2>";
echo "<table border='1'>";

echo "<tr>";
echo "<th>Número</th>";
echo "<th>Nome</th>";
echo "</tr>";

    for ($i=0; $i < 11; $i++) { 
        if ($i % 2 == 0){
            $corfundo = "Yellow";
        }else{
            $corfundo = "LightGreen";
        } 
        desenhaLinha($arrNumero[$i], $arrJogador[$i], $corfundo);

    }
echo "</table>";