<?php

namespace Choco\JogoSimplesPhp;

use Choco\JogoSimplesPhp\User;

class Cadastro extends User
{



    public function cadastrar()
    {
        $this->name = $name;
        $this->id = $id;
        $this->senhaHash = $senhaHash;
        $this->users = $users;
        $this->password = $password;
        $this->classe = $heroiEscolhido;


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


    }

}