<?php
//declarar arrays
$egd = array("numero" => 16, "nome" => "Eurico Gaspar Dutra", "inicio" => 1946, "fim" => 1951 );
$gv = array("numero" => 17, "nome" => "GEtúlio Vargas", "inicio" => 1951, "fim" => 1954 );
$cf = array("numero" => 18, "nome" => "Café Filho", "inicio" => 1954, "fim" => 1955 );
$cl = array("numero" => 19, "nome" => "Carlos Luiz", "inicio" => 1955, "fim" => 1955 );
$nr = array("numero" => 20, "nome" => "Nereu Ramos", "inicio" => 1955, "fim" => 1956 );
$jk = array("numero" => 21, "nome" => "Juscelino Kubitschek", "inicio" => 1956, "fim" => 1961 );

//junta os arrays (matriz)
$presidentes=array($egd, $gv, $cf, $cl, $nr, $jk);

//cria as linhas com valores dos arrays
function linhaPresidente($p ) {
    echo "<td>" . $p["numero"] . "</td>";
    echo "<td>" . $p["nome"] . "</td>";
    echo "<td>" . $p["inicio"] . "</td>";
    echo "<td>" . $p["fim"] . "</td>";
    echo "</tr>";
    
}
//cria a tabela e as colunas
echo "<table border='3'>";
echo "<tr>";
echo "<th>Número</th>";
echo "<th>Nome</th>";
echo "<th>Início</th>";
echo "<th>Fim</th>";
echo "</tr>";

//o foreach chama a função desenha linha. (laço)
foreach($presidentes as $p){
    linhaPresidente($p);
}

echo "</table>";
//esse exercício é sobre uma tabela com colunas.
// contém numero, nome, inicio e fim dos respectivos presidentes do brasil.
//tendo 7 linhas e 4 colunas.