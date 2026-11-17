<?php
class Robo{
    private string $nome;
    private int $bateria;
    private int $pontos;

    public function __construct($nome, $bateria = 100, $pontos = 0){
        $this->nome = $nome;
        $this->bateria = $bateria;
        $this->pontos = $pontos;
    }

    public function executarDesafio(){
        if ($this-> bateria < 20){
            echo "O robô não pode realizar o desafio, bateria insuficiente! <br>";
        }elseif ($this->bateria < 0){
            return  0.00;
        }else{
            $this->bateria -= 20;
            $this->pontos += 10;
            echo "O robô executou o desafio com sucesso! <br>";
        }
    }
    public function recarregar(){
        $this->bateria = 100;
    } 
    public function getNome(){
        return $this->nome;
    }
    public function getBateria(){
        return $this->bateria;
    }
    public function getPontos(){
        return $this->pontos;
    }
}
$robo1 = new Robo ("Robo1");
$robo1->executarDesafio();
$robo1->executarDesafio();
echo "Nome do robô: <br>" . $robo1->getNome() . "Bateria: <br>" . $robo1->getBateria() . "Pontos: " . $robo1->getPontos() . "<br>";

$robo2 = new Robo ("Robo2");
$robo2->executarDesafio();
echo "Nome do robô: <br>" . $robo2->getNome() . "Bateria: <br>" . $robo2->getBateria() . "Pontos: " . $robo2->getPontos() . "<br>";


$robo3= new Robo ("Robo3");
$robo3->executarDesafio();
$robo3->executarDesafio();
$robo3->executarDesafio();
echo "Nome do robô: <br>" . $robo3->getNome() . "Bateria: <br>" . $robo3->getBateria() . "Pontos: " . $robo3->getPontos() . "<br>";

if ($robo1->getPontos() > $robo2->getPontos() && $robo1->getPontos() > $robo3->getPontos()){
    echo "O robô 1 obteve a maior pontuação!";
}elseif ($robo2->getPontos() > $robo1->getPontos() && $robo2->getPontos() > $robo3->getPontos()){
     echo "O robô 2 obteve a maior pontuação!";
}else{
     echo "O robô 3 obteve a maior pontuação!";
}
?>