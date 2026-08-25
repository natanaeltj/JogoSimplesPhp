<?php
declare(strict_types = 1);

namespace Choco\JogoSimplesPhp;
class User
{
    public string $name;
    public int $id ;
    public object $classe; // classe escolhida de heroi para criar um relacionamento
    public string $password;
    private $senhaHash;

    private string $user;
    //user deverá receber personagem



 private function __construct ($login, $senhaHash, $user, $name )
    {
        $this->name = $name;
    }
    private function autenticar()
    {}

    private function cadastrar()
    {}
    private function login()
    {}


}