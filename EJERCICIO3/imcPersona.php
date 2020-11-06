<?php

    $nombre = $_POST["nombre"];
    $peso = $_POST["peso"];
    $estatura = $_POST["estatura"];

    class Imc
    {
        private $nombre, $peso, $estatura, $imc;

        public function __construct($name, $peso, $estatura)
        {
            $this->nombre = $name;
            $this->peso = $peso;
            $this->estatura = $estatura;
        }

        public function calcularImc()
        {
            $this->imc = $this->peso / ($this->estatura * $this->estatura);
            return $this->imc;
        }

        public function mostrarImc()
        { 
            if ($this->imc <= 18.5) 
            {
                echo $this->nombre . " su IMC es: " . $this->imc . "</br>";
                echo "Por debajo del peso";
            }else if($this->imc > 18.5 && $this->imc <= 24.9)
            {
                echo $this->nombre . " su IMC es: " . $this->imc . "</br>";
                echo "Saludable";
            }else if($this->imc >= 25 && $this->imc <= 29.9)
            {
                echo $this->nombre . " su IMC es: " . $this->imc . "</br>";
                echo "Con sobrepeso";
            }else if($this->imc >= 30 && $this->imc <= 39.9)
            {
                echo $this->nombre . " su IMC es: " . $this->imc . "</br>";
                echo "Obeso";
            }else if($this->imc > 40)
            {
                echo $this->nombre . " su IMC es: " . $this->imc . "</br>";
                echo "Obesidad mórbida";
            }
        }
    }

    $obj = new Imc($nombre, $peso, $estatura);
    $calcularImc = $obj->calcularImc();
    $mostrarImc = $obj->mostrarImc();
?>