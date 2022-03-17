<?php

    class Carro {

        private $modelo;
        private $motor;
        private $ano;

        public function getModelo() {
            return $this -> modelo;
        }

        public function setModelo($modelo) {
            $this -> modelo = $modelo;
        }

        public function getMotor():float {
            return $this -> motor;
        }

        public function setMotor($motor) {
            $this -> motor = $motor;
        }

        public function getAno():int {
            return $this -> ano;
        }

        public function setAno($ano) {
            $this -> ano = $ano;
        }

        public function exibirInfoCarro() {

            return array (

                "modelo" => $this -> getModelo(),
                "motor" => $this -> getMotor(),
                "ano" => $this -> getAno()

            );

        }

    }
    // FIM CLASS CARRO

    $supra = new Carro();
    $supra -> setModelo("Toyota Supra");
    $supra -> setMotor(3.0);
    $supra -> setAno(1993);

    var_dump($supra -> exibirInfoCarro());

?>