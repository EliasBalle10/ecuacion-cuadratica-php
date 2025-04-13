<?php

class EcuacionCuadratica {
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function resolver() {
        if ($this->a == 0) {
            return "No es una ecuación cuadrática (a no puede ser 0)";
        }

        $discriminante = pow($this->b, 2) - 4 * $this->a * $this->c;

        if ($discriminante < 0) {
            return "No tiene soluciones reales.";
        }

        $x1 = (-$this->b + sqrt($discriminante)) / (2 * $this->a);
        $x2 = (-$this->b - sqrt($discriminante)) / (2 * $this->a);

        return [
            "x1" => $x1,
            "x2" => $x2
        ];
    }
}
