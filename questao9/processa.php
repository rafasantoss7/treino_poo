<?php
    require_once "Corrida.php";

    $nome = $_POST['nome'];
    $distancia = $_POST['distancia'];
    $tempo = $_POST['tempo'];

     if(!$nome || !$distancia || !$tempo){
        exit ("Dados incorretos!");
     }
     $atleta = new Corrida ($nome, (float) $distancia, (int) $tempo);
?>

<!DOCTYPE html>
<html lang="pt-br"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corrida registrada</title>
</head>
<body>
    <header>
        <h1>Corrida registrada</h1>
    </header>
    <main>
        <p>Atleta<?=$atleta->getAtleta() ?></p>
        <br>
        <p>Distância percorrida: <?=$atleta->getDistancia() ?> Km</p>
        <br>
        <p>Tempo gasto: <?= $atleta->getTempo() ?> horas</p>
        <br>
        <p>Velocidade média: <?= $atleta->calcularVelocidade() ?> km/h</p>
    <a href="index.html">Voltar para o cadastro...</a>
    </main>
</body>
</html>