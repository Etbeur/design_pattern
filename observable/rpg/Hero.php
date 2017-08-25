<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 25/08/17
 * Time: 12:19
 */

namespace observable\rpg;

use observable\interfaces\IObservableRpg;
use observable\interfaces\ISubjectRpg;


class Hero implements ISubjectRpg {
    private $hp = 100;
    private $mp = 100;
    private $observable = [];

    public function sufferDamage() {
        $this->hp -= 25;
        $this->notifyObservables();
    }

    public function heal() {
        $this->hp += 25;
        $this->mp -= 25;
        $this->notifyObservables();
    }

    public function addObservable( IObservableRpg $observable ) {
        $this->observable[] = $observable;
    }

    public function notifyObservables() {
        foreach($this->observable as $obs) {
            $obs->update( $this->hp, $this->mp );
        }
    }

    public function deleteObservable(IObservableRpg $observateur) {
        $found = array_search($observateur, $this->observable, true);
        if($found) {
            array_splice($this->observable, $found, 1);
        }
    }
}