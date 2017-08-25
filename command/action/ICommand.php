<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 25/08/17
 * Time: 10:07
 */

namespace command\action;


interface ICommand {
    function execute();
    function cancel();
}