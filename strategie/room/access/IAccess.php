<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 23/08/17
 * Time: 10:03
 */

namespace strategie\room\access;


use strategie\Robot;

interface IAccess
{
    function hasAccess(Robot $robot): bool;
}