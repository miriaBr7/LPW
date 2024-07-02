<?php

function desenhaLinha($linha){

}


// A- declarar os vetores do tipo associativo
$linha1 = array("ordem" => 1, "país" => "Estados Unidos",
                 "ouro" =>46, "prata" => 37, "bronze" => 38);  
$linha2 = array("ordem" => 2, "país" => "grã betanha",
                 "ouro" =>27, "prata" => 23, "bronze" => 17);  
$linha3 = array("ordem" => 3, "país" => "Estados Unidos",
                 "ouro" =>26, "prata" => 28, "bronze" => 26);  




// B- garar matriz
$linhas = array($linha1, $linha2, $linha3);



echo "<table border= '1'>";
echo "<tr>";
echo "<th>Ordem</th>";
echo "<th>País</th>";
echo "<th>Ouro</th>";
echo "<th>Prata</th>";
echo "<th>Bronze</th>";
echo "<th>Total</th>";

echo "</tr>";



// C-percorrer a matriz e gerar as linhas na tabela
foreach( $linhas as $l){
    desenhaLinha($l);


    echo "<tr>";
    echo "<td>" . $linha ["Ordem"] . "<br>";
    echo "<td>" . $linha ["Pais"] . "<br>";
    echo "<td>" . $linha ["Ouro"] . "<br>";
    echo "<td>" . $linha ["Prata"]. "<br>";
    echo "<td>" . $linha ["Bronze"] . "<br>";
    echo "<td>" . $linha ["Ouro"]+ $linha ["Prata"]+$linha ["Bronze"] . "<br>";

    echo "</tr>";
    echo "</br>";
}

echo "</table>";

