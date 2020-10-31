<?php

    $parcial1 = $_POST["parcial1"];
    $parcial2 = $_POST["parcial2"];
    $parcial3 = $_POST["parcial3"];
    $examenFinal = $_POST["examenFinal"];
    $trabajoFinal = $_POST["trabajoFinal"];
    class Notas
    {
        private $parcial1, $parcial2, $parcial3, $examenFinal, $trabajoFinal, $notaFinal, $notaparcial;

        public function __construct($p1, $p2, $p3, $e_final, $t_final)
        {
          $this->parcial1 = $p1;
          $this->parcial2 = $p2;
          $this->parcial3 = $p3;
          $this->examenFinal = $e_final;
          $this->trabajoFinal = $t_final;
        }

        public function calcularNotaParcial()
        {
            $this->notaparcial = ($this->parcial1 + $this->parcial2 + $this->parcial3) / 3;
            return $this->notaparcial;
        }

        public function calcularNotaFinal()
        {
            $this->notaFinal = $this->notaparcial*0.35 + $this->examenFinal*0.35 + $this->trabajoFinal*0.30;
            return $this->notaFinal;
        }
    }

    $kevin= new Notas($parcial1, $parcial2, $parcial3, $examenFinal, $trabajoFinal);
    $notaparcial = $kevin->calcularNotaParcial();
    $notaFinal = $kevin->calcularNotaFinal();
    echo "La nota final de Kevin es: " . $notaFinal;
?>