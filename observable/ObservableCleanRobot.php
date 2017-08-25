<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 25/08/17
 * Time: 14:26
 */

namespace observable;


use observable\interfaces\IObservable;
use strategie\CleanRobot;

class ObservableCleanRobot extends CleanRobot implements IObservable {

    public function update(int $temperature, int $batterie, int $humeur) {
        if($temperature > 80) {
            echo "Le robot ménager jette son seau d'eau sur l'Overlord";
        }
    }
}