<?php
declare(strict_types=1);
// Antes de começar deverá ter o login e senha para o progresso ficar salvo, e apos o login ou o cadastro eles deveram escolher a classe
// Realizar um sistema  de turnos que funciona enquanto um dos dois estiverem vivos, quando a vida de um personagem chegar a zero o jogo acaba e
// e vence o ultimo que ficar vivo. A cada turno o heroi ira recuperar 100% da vida
//cada inimigo terá 50% de chance de aparecer
//se a velocidade de ataque for maior do que a do inimigo ele devera atacar primeiro
// a defesa divide o ataque do inimigo e soma por 2

$exit = false;
class jogoSimples
{
}
    while($exit == false){
     $options = readline("1 - Login \n 2 - Cadastro \n 3 - Sair ");

     switch ($options){
         case "1":
        $name = readline( 'Seja bem vindo ao Jogo Simples! Insira seu login:');
        readline("Nome:");
        readline("Senha:");
         case "2":
             $user = readline('name');
             $pass = readline('Senha:');
         case "3":
             echo('Obrigado por jogar! Saindo...');
             $exit = true;
     }


}
