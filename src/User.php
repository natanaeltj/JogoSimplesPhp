<?php
declare(strict_types = 1);

namespace Choco\JogoSimplesPhp;
class User
{
    public string $name;
    public string $id;
    public object $classe; // classe escolhida de heroi para criar um relacionamento
    public object $heroiEscolhido;
    private string $password;
    public string $senhaHash;

    private object $users;
    //user deverá receber personagem



 public function __construct ($login, $senhaHash, $users, $name )
    {
        $login->login = $login;
        $this->name = $name;
        $senhaHash->senha = $senhaHash;
        $this->users = $users;
    }
    private function cadastrar(string $name, object $users, string $id, string $heroiEscolhido, string $password, string $senhaHash, string $user)
    {
        $this->name = $name;
        $this->id = $id;
        $this->senhaHash = $senhaHash;
        $this->users = $users;
        $this->classe = $heroiEscolhido;

//    private function login()
//    {
//        $user = new User();
//
//          verificar usuario
//    }
            echo("----Inicio do cadastro---- \n");
            echo("Caso necessario digite 'Sair' para parar o cadastro \n");
        do {
            $name = readline("Digite seu nome:");
            echo("Seu nome é {$name} correto? digite 2 para repetir");

            $password = readline("Digite sua senha");
            $vericacaoSenha = readline("Digite novamente sua senha:");

            if ($password == $vericacaoSenha) {
//                $senhaHash = password_hash($password);
                echo("Cadastro concluido com sucesso {$name}!");
                 break;
            } else {
                echo("Senha invalida \n");
                echo("Repita novamente \n");
            }
        } while ($name || $password == "Sair");


        return $this->users = (object) [
            'id' => $id = uniqid(),
            'name' => $name,
            'senha' => $senhaHash,
        ];

        dump($users);

    }
    private function autenticar()
    {}



}
