<?php

class Tenista {
    public $nombre;
    public $edad;
    public $nivel;
    public $club;

    public function __construct($nombre, $edad, $nivel, $club) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->nivel = $nivel;
        $this->club = $club;
    }

    public function entrenar() {
        return $this->nombre . " está entrenando en el club Union " . $this->club . ".";
    }

    public function jugarPartido($oponente) {
        return $this->nombre . " está jugando un partido contra " . $oponente . ".";
    }

    public function cambiarClub($nuevoClub) {
        $this->club = $nuevoClub;
        return $this->nombre . " ha cambiado al club " . $nuevoClub . ".";
    }
}

// Creación de objetos
$tenista1 = new Tenista("Maicol", 25, "Profesional", "Academia club Union");
$tenista2 = new Tenista("Breiner ", 22, "Profesional", "Tenis Club Suizo");

// Imprimir método
echo $tenista1->entrenar();
?>
