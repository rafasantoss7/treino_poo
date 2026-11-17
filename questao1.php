<?php

class SessaoCinema{
    public string $filme;
    public string $horario;
    public int $sala;

    public function __construct($filme, $horario, $sala){
        $this->filme = $filme;
        $this->horario = $horario;
        $this->sala = $sala;
    }
    public function exibirSessao(){
        echo "<br> Nome do filme: " . $this->filme . "<br>";
        echo "Horário da sessão: ". $this->horario . "<br>";
        echo "Número da sala:" . $this->sala . "<br>";
    }
}
$sessao1 = new SessaoCinema("Velozes e furiosos", "18:00h", 7);
$sessao1->exibirSessao();

$sessao2 = new SessaoCinema("Pânico 7", "21:00h", 9);
$sessao2->exibirSessao();

$sessao3 = new SessaoCinema("Verity", "16:30h", 5);
$sessao3->exibirSessao();

?>