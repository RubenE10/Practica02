<?php

require 'Pelicula.php';

class Series extends Pelicula{
    public function __construct(
        $nombre,
        $año,
        $genero,
        $precio,
        $stock,
        private array $creadores,
        private int $volumen
    )
    {
        parent::__construct($nombre, $año, $genero, $precio, $stock);
    }

    public function getInfo()
    {
        $vl = "<br> Volumen: {$this->volumen} <br>"; 

        $cr = "<vl> <br> -- Creadores -- <br>";
        foreach( $this->creadores as $creadores ){
            $cr .= "<cd> $creadores </cd>";
        }
        $cr .= "</cr>";

        echo parent::getInfo();

        return $vl .= $cr;
    }
  

}

$Serie1 = new Series(
    'Super Campeones',
    '2012',
    'Deporte',
    399.99,
    150,
    ['Yōichi Takahashi'],
    10
);

echo "<br><br>";
echo $Serie1->getInfo();

$Serie2 = new Series(
    'Dragon Ball Z',
    '2010',
    'Accion',
    499.99,
    200,
    ['Akira Toriyama'],
    10
);

echo "<br><br>";
echo $Serie2->getInfo();