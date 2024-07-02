<?php

echo'<link rel="stylesheet" href="atv.css">';

function desenhaBotao($times, $nome){
echo '<div class="dropdown">';
echo '<button class="dropbtn">'.$nome.'</button>';
echo '<div class="dropText">';

foreach($times as $t) {
       echo "<span><img src='". $t['LinkImg']."' width='20' height='20' >".$t['info']."</span>";
       
}
echo "</div>";
echo "</div>";

} 

$time1 = array("LinkImg" => "https://s4.static.brasilescola.uol.com.br/be/2023/09/escudo-do-gremio.jpg", "info" => "Grêmio");
$time2 = array("LinkImg" => "https://a.espncdn.com/combiner/i?img=/i/teamlogos/soccer/500/1936.png", "info" => "Internacional");
$time3 = array("LinkImg" => "https://upload.wikimedia.org/wikipedia/pt/e/e4/Novo_escudo_da_Associa%C3%A7%C3%A3o_Chapecoense_de_Futebol.png", "info" => "Chapecoense");


$times = array($time1, $time2, $time3);
desenhaBotao($times, "times de futebol");



$banda1 = array("LinkImg" => "https://www.eaglepatches.com.br/image/cache/data/product/patch-bordado-acdc-926x926.jpg  ", "info" => "ACDC");
$banda2 = array("LinkImg" => "https://logosmarcas.net/wp-content/uploads/2020/04/Guns-N-Roses-Logo.png", "info" => "Guns'n Roses");
$banda3 = array("LinkImg" => "https://kgo.googleusercontent.com/profile_vrt_raw_bytes_1587515368_10599.jpg", "info" => "Red Hot Chili Peppers");


$bandas = array($banda1, $banda2, $banda3);
desenhaBotao($bandas, "bandas");


$instrumento1 = array("LinkImg" => " https://19557.cdn.simplo7.net/static/19557/sku/sax-alto-ssaxofone-alto-meridian--p-1673526667816.jpeg " , "info" => "Saxofone");
$instrumento2 = array("LinkImg" => "https://media.istockphoto.com/id/137129980/pt/foto/trompete-bronze-em-fundo-branco.jpg?s=612x612&w=is&k=20&c=mLez6NuPAdeeMybGzVmzktO6WTx3hC44bcCkngzPKSo= " , "info" => "Trompete");
$instrumento5 = array("LinkImg" => " https://images.tcdn.com.br/img/img_prod/757946/clarinete_yamaha_ycl255_si_bemol_bb_7443_1_09ed08a16d9af01beb58524ad1f3db0e.png " , "info" => "Clarinete");

$instrumentos = array($instrumento1, $instrumento2, $instrumento5);
desenhaBotao($instrumentos, "intrumentos");


