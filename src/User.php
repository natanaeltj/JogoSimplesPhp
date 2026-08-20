<?php
declare(strict_types = 1);

namespace Choco\JogoSimplesPhp;
class User
{
    public string $name;
    public int $id ;
    public string $password;
    private $senhaHash;

    private string $user;

    public function __construct ($login, $senhaHash, $user, $name)
    {
        $this->name = $name;
    }
    public function autenticar()
    {}

    public function cadastrar()
    {}
    public function login()
    {}


}