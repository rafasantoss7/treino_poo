<?php
abstract class Servico{
    private int $quantidade;

    public function __construct($quantidade){
        $this->quantidade = $quantidade;
    }
    public function getQuantidade{
        return $this->quantidade;
    }
    abstract public function calcularTempo();
}
class Preventiva extends Servico{
    public function calcularTempo(){
        $tempo = $this->quantidade * 2;
        return $tempo;
    }
}
class Corretiva extends Servico{
    public function calcularTempo(){
        $tempo= $this->quantidade * 4;
        return $tempo;
    }
}
class Instalacao extends Servico{
    public function calcularTempo(){
        $tempo = ($this->quantidade * 3) + 1;
        return $tempo;
    }
}
?>