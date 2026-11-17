<?php
class Dispositivo{
    public string $marca;
    public string $modelo;

    public function __construct($marca, $modelo){
        $this->marca = $marca;
        $this->modelo = $modelo;
    }
    public function exibirInformacoes(){
        echo "<br> Marca do dispositivo:"  . $this->marca . "<br>";
        echo "Modelo do dispositivo: " . $this->modelo . "<br>";
    }
}
?>