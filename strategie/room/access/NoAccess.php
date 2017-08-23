<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 23/08/17
 * Time: 10:04
 */

namespace strategie\room\access;


use strategie\Robot;

class NoAccess implements IAccess
{
    public function hasAccess(Robot $robot):bool{
        return false;
    }
}