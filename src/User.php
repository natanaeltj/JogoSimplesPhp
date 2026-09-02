<?php
declare(strict_types = 1);

namespace Choco\JogoSimplesPhp;
class User  //nome, senha e heroi escolhido
{




 public function __construct (public string $name,
                              protected object $users,
                              public string $id,
                              public object $heroiEscolhido,
                              public string $password,
                              protected string $senhaHash)
    {
    }
    public function escolherHeroi(object $heroi):void{
     $this->heroiEscolhido = $heroi;
    }

}
