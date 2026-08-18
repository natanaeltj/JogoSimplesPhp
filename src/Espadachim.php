<?php
declare(strict_types=1);
namespace Choco\JogoSimplesPhp;

class Espadachim extends Herois
{
    private int $kamusari;
    private int $onigiri;


  public function __construct(int $kamusari = 3, int $onigiri = 5){
      $this->kamusari = $kamusari;
      $this->onigiri = $onigiri;

  }

}