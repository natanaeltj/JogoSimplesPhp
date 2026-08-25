<?php

namespace Choco\JogoSimplesPhp;

class Mago extends Herois
{

    private object $bolaDeAgua;
    private object $descargaEletrica;


    public function __construct(float $vida = 19.2, int $armadura = 5, int $ataque = 2 ){
        $this->ataque = $ataque;
        $this->vida = $vida;
        $this->armadura = $armadura;
        $this->bolaDeAgua = (object) [
            'dano' => 10,
            'recarga'  => 5
        ];
        $this->descargaEletrica = (object) [
            'dano' => 15,
            'recarga'  => 7
        ];
        $this->poderes =  [$this->bolaDeAgua, $this->descargaEletrica];
    }


}