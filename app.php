<?php
declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use Choco\JogoSimplesPhp\Espadachim;
use Choco\JogoSimplesPhp\Goblin;
use Choco\JogoSimplesPhp\Game;
use Choco\JogoSimplesPhp\Rodada;

$espadachim = new Espadachim();
$goblin = new Goblin();
$game = new Game();
$rodada = new Rodada();


echo($rodada->iniciarTurno());




