<?php
abstract class Atracao{
    private string $nome;
    private int $capacidade;

    public function __construct($nome, $capacidade){
        $this->nome = $nome;
        $this->capacidade = $capacidade;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getCapacidade(){
        return $this->capacidade;
    }
    abstract public function podeEntrar($idade, $altura);
}
class MontanhaRussa extends Atracao{
    public function podeEntrar($idade, $altura){
        if ($idade >= 12 && $altura >= 1.40){
            echo "O visitante pode andar na montanha russa. <br>";
        }else{
            echo "O visitante não possui altura ou idade mínima para andar na montanha russa. <br>";
        }
    }
}
class CasaAssombrada extends Atracao{
    public function podeEntrar($idade, $altura){
        if ($idade >=10){
            echo "O visitante pode entrar na casa assombrada. <br>";
        }else{
            echo "O visitante não possui idade suficiente  pra entrar na casa assombrada. <br>";
        }
    }
}
class RodaGigante extends Atracao{
    public function podeEntrar ($idade, $altura){
        echo "Qualquer idade e altura pode andar na roda gigante. <br>";
    }
}

$atracoes = [
    new MontanhaRussa ("Montanha Russa", 40),
    new CasaAssombrada ("Casa assombrada", 10),
    new RodaGigante ("Roda gigante", 20)
];

$visitantes = [
    ["nome" => "Ana", "idade" => 15, "altura" => 1.60],
    ["nome" => "Pedro", "idade" => 9, "altura" => 1.35],
    ["nome" => "Maria", "idade" => 20, "altura" => 1.70]
];

foreach ($visitantes as $visitante){
    echo "Visitante:" . $visitante["nome"] . "<br>";

    foreach ($atracoes as $atracao){
        echo "Atração: " . $atracao->getNome();
        $atracao->podeEntrar($visitante['idade'], $visitante['altura']);
    }
}
?>