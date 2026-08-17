<?php
declare(strict_types=1);

class Personagens
{
    public int $ataque;
    public float $vida;
    public int $armadura;
    public array $poder;

    public function __construct(int $ataque, float $vida, float $armadura, array $poder);

    public function setAtack(){}
    public function setPoder(){}
}