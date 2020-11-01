<?php

    $nombre = $_POST["nombre"];
    $cantAutosVendidos = $_POST["cantAutosVendidos"];
    $precioTotalAutos = $_POST["precioTotalAutos"];

    class Comisiones
    {
        private $nombre, $cantAutosVendidos, $precioTotalAutos, $comisionPorCant, $comisionPorPorc, $comisionTotal; 

        public function __construct($name, $cant, $total)
        {
          $this->nombre = $name;
          $this->cantAutosVendidos = $cant;
          $this->precioTotalAutos = $total;
        }

        public function comisionCantidad()
        {
            $this->comisionPorCant = $this->cantAutosVendidos * 50000;
            return $this->comisionPorCant;
        }

        public function comisionPorcentaje()
        {
            $this->comisionPorPorc = $this->precioTotalAutos * 0.05;
            return $this->comisionPorPorc;
        }
        
        public function totalComision()
        {
            $this->comisionTotal = $this->comisionPorCant + $this->comisionPorPorc;
        }
        public function mostrarDatos()
        {
            echo "Empleado: " . $this->nombre . "</br>"; 
            echo "Comision por cantidad de automoviles vendidos: " . $this->comisionPorCant . "</br>";
            echo "Comision por porcentaje en ventas: " . $this->comisionPorPorc . "</br>";
            echo "El total de comisiones generadas en el mes por el empleado " . $this->nombre . " es: " . $this->comisionTotal; 
        }
    }

    $obj = new Comisiones($nombre, $cantAutosVendidos, $precioTotalAutos);
    $comisionPorCant = $obj->comisionCantidad();
    $comisionPorPorc = $obj->comisionPorcentaje();
    $comisionTotal = $obj->totalComision();
    $nombre = $obj->mostrarDatos();

?>