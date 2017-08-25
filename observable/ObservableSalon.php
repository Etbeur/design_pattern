<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 25/08/17
 * Time: 14:34
 */

namespace observable;


use observable\interfaces\IObservable;
use strategie\room\Salon;

class ObservableSalon extends Salon implements IObservable {
    public function update(int $temperature, int $batterie, int $humeur) {
        if($batterie < 45) {
            echo 'Le salon rend ses prises accessibles à Overlord';
        }
    }
}