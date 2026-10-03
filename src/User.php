<?php
declare(strict_types = 1);

namespace Choco\JogoSimplesPhp;

use Choco\JogoSimplesPhp\Rodada;



class User  //nome, senha e heroi escolhido
{
    private string $name;
    private object $heroiEscolhido;

 public function __construct (){}
    public function getName(): string{
     return $this->name;
    }
    public function setName($name): void{
         $this->name = $name;
    }
    public function getHeroiEscolhido(): object{
     return $this->heroiEscolhido;
    }
    public function setHeroiEscolhido($heroiEscolhido):void{
      $this->heroiEscolhido = $heroiEscolhido;
 }
 function setAtacar($Result):void{
     $rodada = new Rodada();
     $dano = ($this->heroiEscolhido->getAtaque() - $Result->getArmor()) - $Result->getVida();
     $danoTotal = max(0, $dano);
     $rodada->taMolhada = $danoTotal; //Eu poderia salvar o numero de vida em uma variavel e depois ir diminuindo ao invés de mudar diretamente o valor de vida
 }
// dano = (ataque do heroi - armadura do vilao) - setVida

//     function setLancarPoder(){
//
//     }


}
