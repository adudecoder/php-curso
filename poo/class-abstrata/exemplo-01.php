<?php

    interface Veiculo
    {

        public function acelerar($velocidade);
        public function freiar($velocidade);
        public function trocarMarcha($marcha);

    }

    abstract class Automovel implements Veiculo
    {

        public function acelerar($velocidade)
        {
            echo "O veiculo acelerou até " . $velocidade . " Km/H";
        }

        public function freiar($velocidade)
        {
            echo "O veiculo frenou até " . $velocidade . " Km/H";
        }

        public function trocarMarcha($marcha)
        {
            echo "O veiculo engatou a marcha " . $marcha;
        }

    }

    class SilviaS15 extends Automovel
    {

        public function empurrar()
        {

        }

    }

    $carro = new SilviaS15();

    $carro -> acelerar(250);

?>