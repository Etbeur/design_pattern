<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 25/08/17
 * Time: 11:34
 */

namespace observable;


use observable\interfaces\IObservable;
use observable\interfaces\ISubject;

class OverlordRobot implements ISubject {
    private $temperature = 45;
    private $batterie = 100;
    private $humeur = 50;
    private $observable = [];

    public function enslaveHumanite() {
        echo 'vive la destruction';
        $this->humeur += 25;
        $this->batterie -= 30;
        $this->temperature += 10;

        $this->notifyObservables();
    }

    public function reload() {
        echo 'Overlord se branche à la prise';
        $this->temperature += 5;
        $this->batterie += 30;
        $this->humeur -= 25;

        $this->notifyObservables();
    }

    public function addObservable( IObservable $observable ) {
        $this->observable[] = $observable;
    }

    public function notifyObservables() {
        foreach($this->observable as $obs) {
            $obs->update($this->temperature,
                $this->batterie,
                $this->humeur);
        }
    }

    public function deleteObservable(IObservable $observateur) {
        $found = array_search($observateur, $this->observable, true);
        if($found) {
            array_splice($this->observable, $found, 1);
        }
    }
}