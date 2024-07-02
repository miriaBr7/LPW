<?php
$palavras = array("futebol", "volei" , "computador" ,
                                 "mouse", "garrafa");
$vazio = array();

//adicionei os elementos no array vazio
foreach($palavras as $p){
    array_push($vazio, $p);
}

//exibir os elementos na forma de lista
//  <ol> ordenada <ul> sem ordem
echo "<ul>";
foreach($vazio as $p) {
    echo "<li>" . $p . "</li>";
}
echo "</ul>";

//500- erro na implementacao
//Not Found- erro no caminho