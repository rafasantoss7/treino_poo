<?php
require_once "LampadaInteligente.php";
require_once "ArCondicionado.php";

$dispositivo = new lampadaInteligente("Stella", "LED", "Branca");
$dispositivo->exibirInformacoes();
$dispositivo->exibirCor();

echo "<br>";

$dispositivo1 = new ArCondicionado("LG", "Portátil", 18.5);
$dispositivo1->exibirInformacoes();
$dispositivo1->exibirTemperatura();
?>