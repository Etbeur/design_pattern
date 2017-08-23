<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 23/08/17
 * Time: 10:16
 */

namespace strategie\room;


use strategie\room\access\IAccess;
use strategie\room\access\NoAccess;

class Bedroom extends Room
{
    public function __construct()
    {
        parent::__construct(new NoAccess());
    }
}