<?php
declare(strict_types=1);

namespace Choco\JogoSimplesPhp;

abstract class Personagens // ataque, vida, armadura e poderes
{

    public string $nameClass;
    protected int $ataque; //precisa de um metodo set e get
    protected float $vida;
    protected int $armadura;
    protected array $poderes;



}