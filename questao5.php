
<?php
abstract Class Irrigacao{
	public int $area;

	public function __construct($area){
	$this->area = $area;
	}
	abstract public function calcularConsumo();
}
class Gotejamento extends Irrigacao{
    public function calcularConsumo(){
        return $this->area * 5;
    }
}
class Aspersao extends Irrigacao{
    public function calcularConsumo(){
        return $this->area * 8;
    }
}
$gotejamento = new Gotejamento(100);
$aspersao = new Aspersao(100);

echo "Consumo de água por gotejamento: " . $gotejamento->calcularConsumo() . " litros <br>";
echo "Consumo de água por aspersão: " . $aspersao->calcularConsumo() . " litros <br>";
?>