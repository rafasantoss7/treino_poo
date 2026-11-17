<?php
    require_once "Servico.php";

    $nome = $_POST['nome'];
    $equipamento = $_POST['equipamento'];
    $quantidade = $_POST['quantidade'];
    $tipo = $_POST['tipo'];

     if(!$nome || !$equipamento || !$quantidade || !$tipo){
        exit ("Dados incorretos!");
     }
     if ($tipo == 'Preventiva'){
        $servico = new Preventiva ($quantidade); 
     }elseif ($tipo == 'Corretiva'){
        $servico = new Corretiva ($quantidade);
     }elseif ($tipo == 'Instalaçao'){
        $servico = new Instalacao($quantidade);
     }else{
        return "serviço inválido."
     }
     $tempo = $servico->calcularTempo();
?>

<!DOCTYPE html>
<html lang="pt-br"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manutenção</title>
</head>
<body>
    <header>
        <h1>Tempo registrado</h1>
    </header>
    <main>
        <p>Responsável<?= $nome ?></p>
        <br>
        <p>Equipamento: <?= $equipamento ?> Km</p>
        <br>
        <p>Quantidade de equipamentos: <?= $servico->getQuantidade() ?> horas</p>
        <br>
        <p>Tipo de serviço: <?= $tipo ?> km/h</p>
        <br>
        <p>Tempo estimado: <?= $tempo ?> horas km/h</p>
        <br>
    <a href="index.html">Voltar para o cadastro...</a>
    </main>
</body>
</html>