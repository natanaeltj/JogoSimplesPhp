<?php
declare(strict_types = 1);

namespace Choco\JogoSimplesPhp;
class User  //nome, senha e heroi escolhido
{

    private string $name;
    private object $heroiEscolhido;




 public function __construct (){}
    public function getName(){
     return $this->name;
    }
    public function setName($name){
         $this->name = $name;
    }
    public function getHeroiEscolhido(){
     return $this->heroiEscolhido;
    }
    public function setHeroiEscolhido($heroiEscolhido){
      $this->heroiEscolhido = $heroiEscolhido;
 }
 function setAtacar(){
     $this->result->setVida( $user->getHeroiEscolhido()->getAtaque - $result[0]->getArmor()); // tem que pegar o valor de result em rodada para atribuir o dano e  o que garante que o valor da vida dos monstros vai voltar ao valor normal?
 }

 function setLancarPoder(){

 }


}
