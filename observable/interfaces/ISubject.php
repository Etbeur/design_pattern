<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 25/08/17
 * Time: 11:31
 */

namespace observable\interfaces;

/**
 * Interface ISubject
 *Cette interface représentera la classe qui pourra être observée.
 *
 */
interface ISubject {
    function addObservable(IObservable $observable);
    function deleteObservable(IObservable $observable);
    function notifyObservables();
}