<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 25/08/17
 * Time: 11:29
 */

namespace observable\interfaces;


interface IObservable {
    function update(int $temperature, int $batterie, int $humeur);
}