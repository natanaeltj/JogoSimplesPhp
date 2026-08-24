<?php
declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use Choco\JogoSimplesPhp\Espadachim;
use Choco\JogoSimplesPhp\Goblin;
use Choco\JogoSimplesPhp\Game;

$espadachim = new Espadachim();
$goblin = new Goblin();
$game = new Game();




//dump($espadachim, $goblin);
dump($game->play($sair = false, $name = "Bolsonaro"));




