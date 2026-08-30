<?php
declare(strict_types=1);
namespace Choco\JogoSimplesPhp;
use Choco\JogoSimplesPhp\User;

class Cadastrar
{

    public function cadastrar($name, $id, $senhaHash):void{

        $this->senhaHash = $senhaHash;

    }

}