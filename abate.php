<?php

$valor_arroba = 300;
$arroba = 15;
$peso_1 = 300;
$peso_2 = 150;
$produtor = " José ";

$pesototal = ( $peso_1 + $peso_2 );
$peso_porarroba = ( $pesototal / $arroba );
$valortotal = ( $peso_porarroba * $valor_arroba );

echo " O valor final da soma das partes dos dois pesos ficou em " . $pesototal . " kg. ";
echo " <br> O valor total pago a " . $produtor . " será de R$" . $valortotal . ",00 " . ", devido ao peso cobrado por arroba. " ;