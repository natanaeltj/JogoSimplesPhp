<?php
declare(strict_types = 1);

namespace Choco\JogoSimplesPhp;
use Choco\JogoSimplesPhp\User;

class Game
{
    private string $escolherHeroi; //deve ser um const
    private string $opcao;

    public function play(bool $sair, string $name ): void
{
    $this->name = $name; //não aponta para name de user
    while($sair == false){
        echo("Seja bem vindo ao jogo $name. Por favor escolha o seu heroi abaixo:");
        $escolherHeroi = readline("Digite 1 para Escolher o espadachim");
        //exibir status
        $escolherHeroi = readLine("Digite 2 para Escolher o Mago");
        //exibir status

        echo("Você escolheu $escolherHeroi /n Digite 1 para iniciar uma rodada ou 2 para sair:");





}
}

}