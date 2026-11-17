<?php
class ObraArte{
    private string $titulo;
    private string $artista;

    public function __construct($titulo,$artista){
        $this->titulo = $titulo;
        $this->artista = $artista;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function getArtista(){
        return $this->artista;
    }
}
class Pintura extends ObraArte{
    public string $tecnica;

    public function __construct ($titulo, $artista, $tecnica){
        parent::__construct($titulo, $artista);
        $this->tecnica=$tecnica;
    }
    public function exibirInformacoesPintura(){
        echo "<br> Título da pintura: " . $this->getTitulo() . "<br>";
        echo "Artista da pintura: " . $this->getArtista() . "<br>";
        echo "Técnica da pintura: " . $this->tecnica . "<br>";
    }
}
class Escultura extends ObraArte{
    public string $material;

    public function __construct ($titulo, $artista, $material){
        parent::__construct($titulo, $artista);
        $this->material = $material;
    }
    public function exibirInformacoesEscultura(){
        echo "<br> Título da escultura: " . $this->getTitulo() . "<br>";
        echo "Artista da escultura: " . $this->getArtista() . "<br>";
        echo "Material da escultura: " . $this->material . "<br>";
    }
}
$pintura = new Pintura ('Mona Lisa', 'Leonardo da Vinci', 'Óleo sobre madeira.');
$pintura->exibirInformacoesPintura();

echo "<br>";

$escultura = new Escultura ('David', 'Michelangelo', 'Mármore.');
$escultura->exibirInformacoesEscultura();

?>