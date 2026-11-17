<?php
require_once "Dispositivo.php";

class ArCondicionado extends Dispositivo{
    public float $temperatura;

    public function __construct($marca, $modelo, $temperatura){
        parent::__construct($modelo,$marca);
        $this->temperatura=$temperatura;
    }
    public function exibirTemperatura(){
        echo "A temperatura do ar está em:" . $this->temperatura . "°C <br>";
    }
}