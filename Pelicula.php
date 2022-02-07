<?php

class Pelicula{
    public function __construct(
        private string $nombre,
        private string $año,
        private string $genero,
        private float $precio,
        private int $stock
    )
    {}

    public function getInfo()
    {
        $info = "<b> {$this->nombre} </b> <br> Basada en el año: <i> {$this->año} </i> <br>
                    Genero: {$this->genero} <br>
                    Precio: {$this->precio} <br>
                ";
        if( $this->stock > 0 ){
            $info .= "En existencia: <span style='color:blue'>  $this->stock  </span>";
        } else {
            $info .= "<span style='color:red'> No hay en existencia </span>";
        }

        return $info;
        
    }

}
$Pelicula1 = new Pelicula(
    'Spiderman',
    '2021',
    'Entretenimiento',
    99.99,
    120
);

echo $Pelicula1->getInfo();

$Pelicula2 = new Pelicula(
    'No se aceptan devoluciones',
    '2018',
    'Comedia',
    149.99,
    100
);

echo "<br><br>";

echo $Pelicula2->getInfo();

?>