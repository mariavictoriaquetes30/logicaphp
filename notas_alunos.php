<?php

$nota_primeirob = 10;
$nota_segundob = 8;
$nota_terceirob = 6;
$nota_quartob = 8;
 
$media = ($nota_primeirob + $nota_segundob + $nota_terceirob + $nota_quartob) / 4 ;

if($media >= 7) 
{
    echo ' O aluno está aprovado com média ' . $media ;
}

else 
{
    echo " O aluno está reprovado devido a media " . $media ;
}