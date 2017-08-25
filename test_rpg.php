<?php

use observable\rpg\DamageButton;
use observable\rpg\HealButton;
use observable\rpg\Hero;
use observable\rpg\HpBar;
use observable\rpg\MpBar;

/**
 * Created by PhpStorm.
 * User: romain
 * Date: 25/08/17
 * Time: 14:59
 */

function myLoader($className) {
    $class = str_replace('\\', '/', $className);
    require($class . '.php');
}
spl_autoload_register('myLoader');

session_start();

if (empty($_SESSION['hero'])) {
    $hero = new Hero();
} else {
    $hero = $_SESSION['hero'];
}

$hero->addObservable( new HpBar() );
$hero->addObservable( new MpBar() );
$hero->addObservable( new DamageButton() );
$hero->addObservable( new HealButton() );
$hero->notifyObservables();
if (filter_input(INPUT_GET, 'action') == 'damage') {
    $hero->sufferDamage();
}
if (filter_input(INPUT_GET, 'action') == 'heal') {
    $hero->heal();
}
$_SESSION['hero'] = $hero;
?>
<style>
    .bar {
        width: 200px;
        height: 50px;
        border: 1px solid black;
        background-color: white;
    }
    .bar .lvl {
        height: 100%;
    }
    .bar .mp {
        background-color: blue;
    }
    .bar .hp {
        background-color: red;
    }
</style>