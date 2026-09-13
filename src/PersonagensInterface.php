<?php

namespace Choco\JogoSimplesPhp;
interface PersonagensInterface
{
    public function getAtaque(): int;
    public function setAtaque(int $ataque): void;
    public function getVida(): float;
    public function setVida(float $vida): void;
    public function setArmor(int $armadura): void;

}