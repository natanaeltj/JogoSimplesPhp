<?php
declare(strict_types = 1);

namespace Choco\JogoSimplesPhp;
class Rodada
{
    public function inciarTurno(string $turno): void{
        echo "Turno: $turno\n";
        echo "Você encontrou um $monstro! o que deseja fazer?"; // Deverá pegar o tipo do monstro
        echo "\n";
        echo "Lançar ataque - 1\n";
        echo "Lançar poder - 2\n";
        echo "Pular turno - 3\n";
        echo "Sair do jogo - 4\n";




    }

}