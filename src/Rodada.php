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
    public int $taMolhada;
//    private int $turno;

    public function iniciarTurno(User $user): void
    {
        $goblin = new Goblin();
        $ogro = new Ogro();
        $randomizer = new Randomizer();
        $monstros = [$goblin, $ogro];


        while (true){
            $monstrosRodada = $randomizer->shuffleArray($monstros);
            $this->result = $monstrosRodada[0];
            $taMolhada = $this->result->getVida();

            echo("Novo inimigo:\n");
            echo "Você encontrou um {$this->result->nameClass}! o que deseja fazer? \n"; // Apontar para raça no objeto $mostro

        for($turno = 1; $this->result->getVida() >= 0 || $user->getHeroiEscolhido()->getVida() >= 0; $turno++){ //tem que ser while
            echo("------Status do Atual------\n");
            echo("Dano: {$this->result->getAtaque()} \n");
            echo("Vida: $taMolhada \n"); //nao aparece a vida descendo burro
            echo("Armadura: {$this->result->getArmor()} \n");
            echo("------Status do Atual------\n");



            echo "------| Turno Atual: {$turno}|------\n";
            echo "Lançar ataque - 1\n";
            echo "Lançar poder - 2\n"; // mostrar lista de poderes e quais estao disponiveis nessa rodada e quanto falta pra lancar um ataque
            echo "Pular turno - 3\n";
            echo "Sair do jogo - 4\n";
            $opcao = readline("Digite aqui: ");
            echo("\n");

            switch ($opcao) {
                case 1:
                    $user->setAtacar($this->result);
                    echo("\nAtacou {$this->result->nameClass}\n");
                    break;

                case 2:
                    echo("------Poder 1------\n");
                    echo("{$user->getHeroiEscolhido()->poderes[0]->name}\n}");
                    echo("{$user->getHeroiEscolhido()->poderes[0]->dano}\n}");
                    echo("{$user->getHeroiEscolhido()->poderes[0]->recarga}\n}");

                    echo("\n");

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
            if($taMolhada >= 0){
                echo("O {$this->result->nameClass} morreu!\n");
                echo("Iniciando uma nova rodada!!\n");
                break;
            } elseif ($user->getHeroiEscolhido()->getVida() >= 0){
                echo("Você morreu!");
                echo("Iniciando uma nova rodada!!\n");
                break;
            };
        }
      }



    }}