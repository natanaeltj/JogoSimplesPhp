<?php
declare(strict_types = 1);

namespace Choco\JogoSimplesPhp;
class User
{
    public string $name;
    public int $id ;
    public object $classe; // classe escolhida de heroi para criar um relacionamento
    public object $heroiEscolhido;
    public string $password;
    private string $senhaHash;

    private string $user;
    //user deverá receber personagem



 private function __construct ($login, $senhaHash, $user, $name )
    {
        $this->name = $name;
    }
    private function cadastrar(string $name,  int $id, string $heroiEscolhido, string $password, string $senhaHash, string $user)
    {
        $this->name = $name;
        $this->id = $id;
        $this->senhaHash = $senhaHash;
        $this->user = $user;
        $this->classe = $heroiEscolhido;

//    Validacao


    }
    private function autenticar()
    {}

    private function login()
    {

    }


}