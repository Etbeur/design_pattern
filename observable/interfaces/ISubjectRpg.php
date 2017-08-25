<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 25/08/17
 * Time: 12:17
 */

namespace observable\interfaces;


interface ISubjectRpg {
    function addObservable(IObservableRpg $observable);
    function deleteObservable(IObservableRpg $observable);
    function notifyObservables();
}