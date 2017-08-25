<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 25/08/17
 * Time: 14:33
 */

namespace observable;


use observable\interfaces\IObservable;
use strategie\RoombaRobot;

class RoombaKiller extends RoombaRobot implements IObservable {
    public function update(int $temperature, int $batterie, int $humeur) {
        if($humeur <= 25) {
            echo "Le roomba extermine les occupants de la maison";
        }
    }
}