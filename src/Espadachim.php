<?php
declare(strict_types=1);
namespace Choco\JogoSimplesPhp;

class Espadachim extends Herois
{

    private int $kamusari;
    private int $onigiri;//adicionar em poderes

    $poderes 


  public function __construct(float $vida = 25.3, int $armadura = 5, int $ataque = 2,  int $kamusari = 3, int $onigiri = 5 ){
      $this->ataque = $ataque;
      $this->vida = $vida;
      $this->armadura = $armadura;
      $this->kamusari = $kamusari;
      $this->onigiri = $onigiri;
  }

}