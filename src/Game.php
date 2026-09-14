<?php
declare(strict_types = 1);

namespace Choco\JogoSimplesPhp;
use Choco\JogoSimplesPhp\User;
use Choco\JogoSimplesPhp\Goblin;
use Choco\JogoSimplesPhp\Espadachim;
use Choco\JogoSimplesPhp\Rodada;


    $espadachim = new Espadachim();
    $goblin = new Goblin();
class Game //escolha do personagem e fluxo do jogo
{
//    public string $name;
//    private string $escolherHeroi; deve ser um const
    private string $opcao;
    public function __construct (){}

    public function play(string $name) //string $name
{
    $user = new User();
    $rodada = new Rodada();
    $sair = false;
    $user->setName(readline("Insira o seu nome:\n"));


//    $user->heroiEscolhido = $heroiEscolhido;
//    $this->name = $name;

    while($sair == false){
        echo("Seja bem vindo ao jogo {$user->getName()}. Por favor escolha o seu heroi abaixo: \n"); // tem que ser getName na parte de user
        echo("Digite 1 para Escolher o espadachim \n");
        //exibir status
        echo("Digite 2 para Escolher o Mago \n");
        $escolherHeroi = readline("Digite aqui:");
        //exibir status

        if($escolherHeroi ==  "1" || $escolherHeroi == "2") {
            switch($escolherHeroi) {
                case "1":
                    $heroiEscolhido = new Espadachim();
                    $user->escolherHeroi($heroiEscolhido);
                    break;
                    //User push espachim
                case "2":
                    $user->$heroiEscolhido = new Mago();
                    $user->escolherHeroi($heroiEscolhido);
                    break;
                default: null;
            }

             echo("Você escolheu {$heroiEscolhido->nameClass} \n");
            $opcao = readline("Digite 1 para iniciar uma rodada ou 2 para o menu:");
        } else{
            echo("Algo deu errado! Por favor escolha o seu heroi abaixo: \n"); //ao iniciar a rodada tem que mandar as opções de personagem escolhido para user
        }

        if ($opcao){
            $rodada->iniciarTurno(1, "Ogro");
        }


}
}



}