<?php
require_once "Dispositivo.php";

class LampadaInteligente extends Dispositivo{
    public string $cor;

    public function __construct($marca, $modelo, $cor){
        parent::__construct($modelo,$marca);
        $this->cor=$cor;
    }
    public function exibirCor(){
        echo "Cor da lâmpada: " . $this->cor . "<br>";
    }
}
?>