<?php
class Instrumento{
   public function tocar(){
        echo "Algum instrumento está tocando!";
   }
}
   class Violao extends Instrumento{
        public function tocar(){
            echo "O violão está tocando acordes.";
        }
   }
   class Piano extends Instrumento{
        public function tocar(){
            echo "O piano está tocando uma melodia";
        }
    }
    class Bateria extends Instrumento{
        public function tocar(){
            echo "A bateria está marcando o ritmo.";
        }
    }

$piano = new Piano();
$bateria = new Bateria();
$violao = new Violao();

$instrumentos = [$piano, $bateria, $violao];

foreach ($instrumentos as $instrumento){
    echo $instrumento->tocar() . "<br>";
}
?>