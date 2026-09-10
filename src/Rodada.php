<?php
declare(strict_types = 1);

namespace Choco\JogoSimplesPhp;
use Random\Randomizer;
use Choco\JogoSimplesPhp\Espadachim;
use Choco\JogoSimplesPhp\Goblin;
use Choco\JogoSimplesPhp\Ogro;


class Rodada // turno, monstro atual, acao do jogador e resultado do combate
{
//    private int $turno;

    public function iniciarTurno(): void
    {
//      $this->turno = $turno; for
        $goblin = new Goblin();
        $ogro = new Ogro();
        $heroi = new Espadachim();

        $result = function () use ($goblin, $ogro) { //Função anonima pode chamar algo que esta fora do escopo
            $monstros = [$goblin, $ogro];
            $randomizer = new Randomizer();

            $monstroEscolhido = $randomizer->shuffleArray($monstros); //Randomizar monstro
            return $monstroEscolhido;
        };

//        echo "Turno: $turno\n";
        echo "Você encontrou um {$result()[0]->nameClass}! o que deseja fazer?"; // Apontar para raça no objeto $mostro
        echo("dano: {$result()[0]->ataque}");
        echo("dano: {$result()[0]->vida}");
        echo("dano: {$result()[0]->armadura}");
        echo "\n";
        echo "Lançar ataque - 1\n";
        echo "Lançar poder - 2\n"; // mostrar lista de poderes e quais estao disponiveis nessa rodada e quanto falta pra lancar um ataque
        echo "Pular turno - 3\n";
        echo "Sair do jogo - 4\n";
        $opcao = readline("Digite aqui: ");

        switch ($opcao) {
            case 1:
                echo("\natacou {$result()[0]->raca}");

            case 2:
                echo(""); //tem que ter um array de poderes seu animal
            case 3:
            case 4:
        }

        // funcao para atacar, esquivar, funcao para turno e funcao para calcular poder a cada 3 ou 5 rodadas


//        protected function setAtack(int $ataque, float $vida, int $armadura ):void
//    {
//        $this->ataque = $ataque; // quando atacar for selecionado devera puxar o dano total do monstro ou do heroi
//        $this->vida = $vida;
//        $ataque = ($armadura / $ataque + 3) - $vida;
//    }



        function lancarPoder()
        {

//            $poder / $armadura + 3.14
        };




    }}