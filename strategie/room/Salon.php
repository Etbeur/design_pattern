<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 23/08/17
 * Time: 10:10
 */

namespace startegie\piece;


use strategie\room\access\CleanAccess;

class Salon extends Room
{
    public function __construct() {
        parent::__construct(new CleanAccess());
    }
}