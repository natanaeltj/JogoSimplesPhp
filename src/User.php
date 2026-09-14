<?php
declare(strict_types = 1);

namespace Choco\JogoSimplesPhp;
class User  //nome, senha e heroi escolhido
{

    private string $name;
    private object $heroiEscolhido;




 public function __construct (){}
    public function escolherHeroi(object $heroi):void{
     $this->heroiEscolhido = $heroi;
    }
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





}
