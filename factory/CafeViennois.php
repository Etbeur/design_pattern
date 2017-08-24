<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 24/08/17
 * Time: 12:05
 */

namespace factory;


use decorateur\Cafe;
use decorateur\IBreuvage;

class CafeViennois {

    protected function creerBreuvage(): IBreuvage {
        return new Cafe();
    }
}