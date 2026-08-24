<?php
declare(strict_types = 1);

namespace Choco\JogoSimplesPhp;
use Choco\JogoSimplesPhp\User;
use Choco\JogoSimplesPhp\Goblin;
use Choco\JogoSimplesPhp\Espadachim;
use Choco\JogoSimplesPhp\Rodada;

    $espadachim = new Espadachim();
    $goblin = new Goblin();
class Game
{
    private string $escolherHeroi; //deve ser um const
    private string $opcao;

    public function play(bool $sair, string $name ): void
{
    $rodada = new Rodada();
    $this->name = $name; //não aponta para name de user
    while($sair == false){
        echo("Seja bem vindo ao jogo $name. Por favor escolha o seu heroi abaixo: \n");
        echo("Digite 1 para Escolher o espadachim \n");
        //exibir status
        echo("Digite 2 para Escolher o Mago \n");
        $escolherHeroi = readLine("Digite aqui:");
        //exibir status
        if($escolherHeroi ==  "1" || $escolherHeroi == "2") {
            switch($escolherHeroi) {
                case "1":
                    $escolherHeroi = "Espadachim";
                    //User push espachim
                    break;
                case "2":
                    $escolherHeroi = "Mago";
                    break;
                default: null;
            }

            $opcao = readline("Você escolheu $escolherHeroi \n Digite 1 para iniciar uma rodada ou 2 para o menu:");
        } else{
            echo("Algo deu errado! Por favor escolha o seu heroi abaixo: \n"); //ao iniciar a rodada tem que mandar as opções de personagem escolhido para user
        }

        if ($opcao){
            $rodada->iniciarTurno(1, "Ogro");
        }




}
}



}