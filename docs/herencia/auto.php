<?php

class Vehiculo {
    public $marca;
    public $modelo;

    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }
}

class Coche extends Vehiculo {
    public $numeroPuertas;

    public function __construct($marca, $modelo, $numeroPuertas) {
        parent::__construct($marca, $modelo);
        $this->numeroPuertas = $numeroPuertas;
    }

    public function mostrarInfo() {
        echo "Marca: " . $this->marca . "<br>";
        echo "Modelo: " . $this->modelo . "<br>";
        echo "Número de puertas: " . $this->numeroPuertas . "\n";
    }
}

