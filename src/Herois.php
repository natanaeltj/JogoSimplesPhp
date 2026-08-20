<?php
declare(strict_types=1);
namespace Choco\JogoSimplesPhp;

abstract class Herois extends Personagens
{
   private float $chance;
   protected int $esquivar;
   protected function esquivar(int $esquivar = 0,float $chance = 1.32 ): void
   {
        $this->esquivar = $esquivar;
        $this->chance = $chance;
   }

}