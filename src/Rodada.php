<?php
declare(strict_types = 1);

namespace Choco\JogoSimplesPhp;
use Choco\JogoSimplesPhp\Espadachim;
class Rodada
{

    public function iniciarTurno(int $turno, string $monstro): void{
        $heroi = new Espadachim();
        echo "Turno: $turno\n";
        echo "Você encontrou um $monstro! o que deseja fazer?"; // Deverá pegar o tipo do monstro
        echo "\n";
        echo "Lançar ataque - 1\n";
        echo "Lançar poder - 2\n"; // mostrar lista de poderes e quais estao disponiveis nessa rodada e quanto falta pra lancar um ataque
        echo "Pular turno - 3\n";
        echo "Sair do jogo - 4\n";
        $opcao = readline("Digite aqui:");

        switch ($opcao){
            case 1:
               echo($this->heroi = $heroi);

            case 2:
                echo(""); //tem que ter um array de poderes seu animal

            case 3:

            case 4:
        }


        //funcao para atacar, esquivar, funcao para turno e funcao para calcular poder a cada 3 ou 5 rodadas

//        private function atacar(){};
//        private function lancarPoder{};


    }

}