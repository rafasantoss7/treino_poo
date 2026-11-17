<?php
class Personagem{
    private string $nome;
    private int $vida;

    public function __construct($nome,$vida){
        $this->nome = $nome;
        $this->vida = $vida;
    }
    public function receberDano($valor){
        if ($this->vida <= 0){
            echo "O personagem está morto. <br>";
        }else{
            $this->vida = $this->vida - $valor;
            echo "O personagem recebeu $valor de dano. <br>";
        }
    }
    public function recuperarVida($valor){
        if ($this->vida <=0){
            echo "O personagem está morto. <br>";
        }else{
            $this->vida = $this->vida + $valor;
            echo "O personagem recuperou $valor de vida. <br>";
        }
    }
    public function getVida(){
        echo "A vida do personagem está em:" . $this->vida . "<br>";
        return $this->vida;
    }
}
$personagem = new Personagem ("Elfo", 100);
$personagem->receberDano(30);
$personagem->recuperarVida(15);
$personagem->getVida();
?>