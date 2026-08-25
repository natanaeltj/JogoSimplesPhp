<?php
declare(strict_types=1);
namespace Choco\JogoSimplesPhp;

class Espadachim extends Herois
{

    private object $kamusari;
    private object $onigiri;

    public function __construct(float $vida = 25.3, int $armadura = 5, int $ataque = 2 ){
      $this->ataque = $ataque;
      $this->vida = $vida;
      $this->armadura = $armadura;
      $this->kamusari = (object) [ //colocar em um arr
          'dano' => 3,
          'recarga'  => 5
          ];
      $this->onigiri = (object) [
          'dano' => 5,
          'recarga'  => 7
          ];
      $this->poderes =  [$this->kamusari, $this->onigiri];
      }


}
