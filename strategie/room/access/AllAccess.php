<?php

namespace strategie\room\access;

use strategie\Robot;

/**
 * Created by PhpStorm.
 * User: romain
 * Date: 23/08/17
 * Time: 09:59
 */

class AllAccess implements IAccess
{
    public function hasAccess(Robot $robot): bool {
        return true;
    }
}