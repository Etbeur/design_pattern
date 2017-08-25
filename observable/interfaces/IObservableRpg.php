<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 25/08/17
 * Time: 13:50
 */

namespace observable\interfaces;


interface IObservableRpg {
    function update(int $hp, int $mp);
}