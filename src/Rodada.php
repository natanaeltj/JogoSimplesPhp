<?php
declare(strict_types = 1);

namespace Choco\JogoSimplesPhp;
use Random\Randomizer;
use Choco\JogoSimplesPhp\Espadachim;
use Choco\JogoSimplesPhp\Goblin;
use Choco\JogoSimplesPhp\Ogro;

class Rodada // turno, monstro atual, acao do jogador e resultado do combate
{
    public object $result;
//    private int $turno;

    public function iniciarTurno(): void
    {

        $user = new User();

        $goblin = new Goblin();
        $ogro = new Ogro();

        $monstros = [$goblin, $ogro];

        $randomizer = new Randomizer();

        $monstros = $randomizer->shuffleArray($monstros);

        $this->result = $monstros[0];

//        echo "Turno: $turno\n";
        echo "Você encontrou um {$this->result->nameClass}! o que deseja fazer? \n"; // Apontar para raça no objeto $mostro
        echo("------Status do Inimigo------\n");
        echo("Dano: {$this->result->getAtaque()} \n");
        echo("Vida: {$this->result->getVida()} \n");
        echo("Armadura: {$this->result->getArmor()} \n");
        echo("------Status do Inimigo------\n");
        for($rodadaA = 0; $this->result->getVida == 0 || $user->getHeroiEscolhido()->getVida == 0; $rodadaA++){
            echo "------| Rodada Atual: {$rodadaA}|------\n";
            echo "Lançar ataque - 1\n";
            echo "Lançar poder - 2\n"; // mostrar lista de poderes e quais estao disponiveis nessa rodada e quanto falta pra lancar um ataque
            echo "Pular turno - 3\n";
            echo "Sair do jogo - 4\n";
            $opcao = readline("Digite aqui: ");

            switch ($opcao) {
                case 1:
                     //tem que chamar um metodo de ataque
                    echo("\nAtacou {$this->result->nameClass}\n");
                    break;

                case 2:
                    echo("------Poder 1------\n");
                    echo("{$user->getHeroiEscolhido()->poderes[0]->name}\n}");
                    echo("{$user->getHeroiEscolhido()->poderes[0]->dano}\n}");
                    echo("{$user->getHeroiEscolhido()->poderes[0]->recarga}\n}");
                    echo("------Poder 2------\n");
                    echo("{$user->getHeroiEscolhido()->poderes[1]->name}\n}");
                    echo("{$user->getHeroiEscolhido()->poderes[1]->dano}\n}");
                    echo("{$user->getHeroiEscolhido()->poderes[1]->recarga}\n}");
                    echo("Digite 1 ou 2 para lançar o poder\n");
                    echo("Caso queira outra opção digite 3:");
                    $opcao = readline("Digite aqui: ");

                    echo(""); //$heroiEscolhido->poderes[0 ou 1]
                case 3:
                    echo("Você pulou um turno");
                    break;
                case 4:
                   $confirmacao = readline("Tem certeza que deseja sair?");
                   if ($confirmacao == "Sim") {
                       exit;
                   } else{
                     return;  //tem que dar retorno para o inicio do for
                   }

            }
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