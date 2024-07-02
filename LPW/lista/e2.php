<?php

$carro1 = array("modelo" => "GRT",
                "marca" => "nissan" ,
                 "foto" => "https://cdn.appdealersites.com.br/saga/blog-2023/nissan-gt-r-nismo-special-edition-my2024-02.png");

$carro2 = array("modelo" => "RS6",
                    "marca" => "audi" ,
                    "foto" => "https://s2-autoesporte.glbimg.com/Lv2iAoYEhwZSh9q17257TnklA8o=/0x0:1400x788/888x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_cf9d035bf26b4646b105bd958f32089d/internal_photos/bs/2023/7/L/1R6BGYTNKmV1sYB7zdkg/audi-rs6-avant-4.jpg" );


$carro3 = array("modelo" => "FUSCA 1971 AZUL",
                "marca" => "fusca",
                "foto" => "https://www.designi.com.br/images/preview/11003361.jpg");
                            

$carro4 = array("modelo" => "marca não identificada",
                "marca" => "fdg ",
                "foto" => "https://img.freepik.com/fotos-premium/um-despejo-de-carros-desmontados-carros-antigos-para-desmontagem-e-reparo-detalhes-detalhados-do-campo-de-acidentes-automobilisticos_678914-9438.jpg?w=740");
                        
                          
$carros = array($carro1, $carro2, $carro3, $carro4);  


foreach($carros as $c) {
    echo "<div style='border: solid 1px; width: 300px; margin-top: 20px;'>";
    echo $c["modelo"] . "<br>";
    echo $c["marca"] . "<br>";
    echo "<img style='width: 100%; height: auto;' src='" . $c['foto'] . "' /><br>";
    echo "</div>";
}


$instrumento1 = array("LinkImg" => " https://19557.cdn.simplo7.net/static/19557/sku/sax-alto-ssaxofone-alto-meridian--p-1673526667816.jpeg " , "info" => "Saxofone");
$instrumento2 = array("LinkImg" => "https://media.istockphoto.com/id/137129980/pt/foto/trompete-bronze-em-fundo-branco.jpg?s=612x612&w=is&k=20&c=mLez6NuPAdeeMybGzVmzktO6WTx3hC44bcCkngzPKSo= " , "info" => "Trompete");
$instrumento5 = array("LinkImg" => " https://images.tcdn.com.br/img/img_prod/757946/clarinete_yamaha_ycl255_si_bemol_bb_7443_1_09ed08a16d9af01beb58524ad1f3db0e.png " , "info" => "Clarinete");

desenhaBotao($instrumentos, "intrumentos");
$instrumentos = array($instrumento1, $instrumento2, $instrumento5);

